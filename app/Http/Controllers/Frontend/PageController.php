<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Admin\Row;
use App\Models\Admin\Brand;
use Illuminate\Http\Request;
use App\Models\Admin\Product;
use App\Models\Admin\BrandPage;
use App\Models\Admin\ClientStory;
use App\Models\Admin\SolutionCard;
use App\Http\Controllers\Controller;
use App\Models\Admin\Industry;
use App\Models\Admin\MultiIndustry;
use App\Models\Admin\MultiSolution;
use App\Models\Admin\SolutionDetail;
use Brian2694\Toastr\Facades\Toastr;

class PageController extends Controller
{
    public function overview($id)
    {
        $data['brand'] = Brand::where('slug', $id)->select('id', 'slug', 'title', 'image')->first();
        $data['brandpage'] = BrandPage::where('brand_id', $data['brand']->id)->first();
        if (!empty($data['brandpage'])) {

            if ($data['brandpage']) {
                $data['row_one'] = Row::where('id', $data['brandpage']->row_four_id)->first();
                $data['row_three'] = Row::where('id', $data['brandpage']->row_five_id)->first();
                $data['row_four'] = Row::where('id', $data['brandpage']->row_seven_id)->first();
                $data['row_five'] = Row::where('id', $data['brandpage']->row_eight_id)->first();
                $data['card1'] = SolutionCard::where('id', $data['brandpage']->solution_card_one_id)->first();
                $data['card2'] = SolutionCard::where('id', $data['brandpage']->solution_card_two_id)->first();
                $data['card3'] = SolutionCard::where('id', $data['brandpage']->solution_card_three_id)->first();
            }

            return view('frontend.pages.kukapages.overview', $data);
        } else {
            Toastr::error('No Details information found for this Brand.');
            return redirect()->back();
        }
    }
    public function brandProducts($id, Request $request)
    {
        $data['brand'] = Brand::where('slug', $id)->select('id', 'slug', 'title', 'image')->first();
        $data['brandpage'] = BrandPage::where('brand_id', $data['brand']->id)->first(['id', 'banner_image', 'header']);
        if (!empty($data['brandpage'])) {

            $productIds = Product::where('brand_id', $data['brand']->id)
                ->where('product_status', '=', 'product')
                ->distinct()
                ->pluck('id');
            // $productIds = $data['products']->pluck('id')->all(); // Extracting product IDs
            $data['products'] = Product::whereIn('id', $productIds)
                ->select('id', 'brand_id', 'rfq', 'slug', 'name', 'thumbnail', 'price', 'discount', 'price_status', 'cat_id')
                ->paginate(10);
            // dd($data['products']);
            $industryIds = MultiIndustry::whereIn('product_id', $productIds)
                ->pluck('industry_id')
                ->unique();

            $data['industries'] = Industry::whereIn('id', $industryIds)->get();
            foreach ($data['industries'] as $industry) {
                // Fetch product IDs for the current industry
                $productIdsForIndustry = MultiIndustry::where('industry_id', $industry->id)
                    ->whereIn('product_id', $productIds)
                    ->pluck('product_id')
                    ->toArray();

                // Filter products collection for the current industry
                $productsForIndustry = $data['products']->whereIn('id', $productIdsForIndustry)->all();

                // Assign the products to the industry
                $industry->products = $productsForIndustry;
            }

            $solutionIds = MultiSolution::whereIn('product_id', $productIds)
                ->pluck('solution_id')
                ->unique();

            $data['solutions'] = SolutionDetail::whereIn('id', $solutionIds)->get();
            foreach ($data['solutions'] as $solution) {
                // Fetch product IDs for the current industry
                $productIdsForSolution = MultiSolution::where('solution_id', $solution->id)
                    ->whereIn('product_id', $productIds)
                    ->pluck('product_id')
                    ->toArray();

                // Filter products collection for the current industry
                $productsForSolution = $data['products']->whereIn('id', $productIdsForSolution)->all();

                // Assign the products to the industry
                $solution->products = $productsForSolution;
            }

            if ($request->ajax()) {
                return view('frontend.pages.kukapages.partial.product_pagination', $data);
            }

            // dd($data['industry_ids']);
            return view('frontend.pages.kukapages.products', $data);
        } else {
            Toastr::error('No Details information found for this Brand.');
            return redirect()->back();
        }
    }
    public function productDetails($id)
    {
        //dd($id);

        $data['sproduct'] = Product::where('slug', $id)->where('product_status', 'product')->first();
        if (!empty($data['sproduct']->cat_id)) {
            $data['products'] = Product::where('cat_id', $data['sproduct']->cat_id)
                ->where('product_status', 'product')
                ->select('products.id', 'products.rfq', 'products.slug', 'products.name', 'products.thumbnail', 'products.price', 'products.discount')
                ->limit(12)
                ->distinct()
                ->get();
        } else {
            $data['products'] = Product::inRandomOrder()->where('product_status', 'product')->limit(8)->get();
        }

        $data['brand'] = Brand::where('id', $data['sproduct']->brand_id)->select('id', 'slug', 'title', 'image')->first();
        $data['brandpage'] = BrandPage::where('brand_id', $data['brand']->id)->first(['id', 'banner_image', 'header']);
        if (!empty($data['brandpage'])) {
            return view('frontend.pages.kukapages.product_details', $data);
        } else {
            return view('frontend.pages.product.product_details', $data);
        }
    }











































    // public function brandProducts($id)
    // {
    //     $data['brand'] = Brand::where('slug', $id)->select('id', 'slug', 'title', 'image')->first();
    //     $data['brandpage'] = BrandPage::where('brand_id', $data['brand']->id)->first(['id', 'banner_image', 'header']);
    //     if (!empty($data['brandpage'])) {
    //         $products = Product::where('brand_id', $data['brand']->id)
    //             ->where('product_status', '=', 'product')
    //             ->distinct()
    //             ->paginate(8);

    //         $productIds = $products->pluck('id')->all();

    //         $industriesWithProducts = Industry::with(['multiIndustry' => function ($query) use ($productIds) {
    //             $query->whereIn('product_id', $productIds);
    //         }])
    //             ->whereIn('id', function ($query) use ($productIds) {
    //                 $query->select('industry_id')
    //                     ->from('multi_industries')
    //                     ->whereIn('product_id', $productIds);
    //             })
    //             ->get();

    //         foreach ($industriesWithProducts as $industry) {
    //             $productIdsForIndustry = $industry->multiIndustry->pluck('product_id')->toArray();
    //             $industry->products = Product::whereIn('id', $productIdsForIndustry)->paginate(8);
    //         }

    //         $solutionsWithProducts = SolutionDetail::with(['multiSolution' => function ($query) use ($productIds) {
    //             $query->whereIn('product_id', $productIds);
    //         }])
    //             ->whereIn('id', function ($query) use ($productIds) {
    //                 $query->select('solution_id')
    //                     ->from('multi_solutions')
    //                     ->whereIn('product_id', $productIds);
    //             })
    //             ->get();

    //         foreach ($solutionsWithProducts as $solution) {
    //             $productIdsForSolution = $solution->multiSolution->pluck('product_id')->toArray();
    //             $solution->products = Product::whereIn('id', $productIdsForSolution)->paginate(8);
    //         }

    //         $data['industries'] = $industriesWithProducts;
    //         $data['solutions'] = $solutionsWithProducts;
    //         $data['products'] = $products;

    //         return view('frontend.pages.kukapages.products', $data);
    //     } else {
    //         Toastr::error('No Details information found for this Brand.');
    //         return redirect()->back();
    //     }
    // }

    public function ajaxBrandProductsPagination($slug, Request $request)
    {
        dd($request);
        $brand = Brand::where('slug', $slug)->first();
        $products = Product::where('brand_id', $brand->id)
            ->where('product_status', 'product')
            ->distinct()
            ->select('id', 'brand_id', 'rfq', 'slug', 'name', 'thumbnail', 'price', 'discount', 'price_status', 'cat_id')
            ->paginate(8);

        return response()->json([
            'products' => view('frontend.pages.kukapages.partial.product_pagination', compact('products'))->render(),

        ]);
    }
}
