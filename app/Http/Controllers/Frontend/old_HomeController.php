<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Models\Admin\Row;
use App\Models\Admin\Blog;
use App\Models\Admin\Brand;
use App\Models\Admin\Policy;
use Illuminate\Http\Request;
use App\Models\Admin\Feature;
use App\Models\Admin\Product;
use App\Models\Admin\Setting;
use App\Models\Admin\Success;
use App\Models\Admin\Category;
use App\Models\Admin\Homepage;
use App\Models\Admin\Industry;
use App\Models\Admin\BrandPage;
use App\Models\Admin\LearnMore;
use App\Models\Admin\TechGlossy;
use App\Models\Admin\ClientStory;
use App\Models\Admin\SubCategory;
use App\Models\Admin\IndustryPage;
use App\Models\Admin\SolutionCard;
use App\Models\Admin\WhatWeDoPage;
use Illuminate\Support\Facades\DB;
use App\Models\Admin\PortfolioPage;
use App\Models\Admin\PortfolioTeam;
use App\Http\Controllers\Controller;
use App\Models\Admin\AboutUs;
use App\Models\Admin\Country;
use App\Models\Admin\DocumentPdf;
use App\Models\Admin\Faq;
use App\Models\Admin\SolutionDetail;
use App\Models\Admin\SubSubCategory;
use App\Models\Admin\TechnologyData;
use App\Models\Admin\PortfolioClient;
use App\Models\Admin\HardwareInfoPage;
use App\Models\Admin\MultiIndustry;
use App\Models\Admin\OfficeLocation;
use App\Models\Admin\SoftwareInfoPage;
use App\Models\Admin\PortfolioCategory;
use App\Models\Admin\PortfolioChooseUs;
use App\Models\Admin\SubSubSubCategory;
use App\Models\Admin\PortfolioClientFeedback;
use App\Models\Admin\PortfolioDetails;
use App\Models\Site;
use Brian2694\Toastr\Facades\Toastr;

class HomeController extends Controller
{

    //Client Authentication

    public function login()
    {
        return view('frontend.auth.login');
    }

    public function register()
    {
        return view('frontend.auth.register');
    }



    //Homepage

    public function index()
    {

        $data['home'] = Homepage::latest('id', 'desc')->with([
            'feature1', 'feature2', 'feature3', 'feature4', 'feature5',
            'success1', 'success2', 'success3',
            'story1', 'story2', 'story3', 'story4',
            'techglossy'
        ])->first();

        $data['feature1']   = $data['home']->feature1;
        $data['feature2']   = $data['home']->feature2;
        $data['feature3']   = $data['home']->feature3;
        $data['feature4']   = $data['home']->feature4;
        $data['feature5']   = $data['home']->feature5;
        $data['success1']   = $data['home']->success1;
        $data['success2']   = $data['home']->success2;
        $data['success3']   = $data['home']->success3;
        $data['story1']     = $data['home']->story1;
        $data['story2']     = $data['home']->story2;
        $data['story3']     = $data['home']->story3;
        $data['story4']     = $data['home']->story4;
        $data['techglossy'] = $data['home']->techglossy;


        // $data['products'] = [];

        // for ($i = 0; $i < 10; $i++) {
        //     $softwareProducts = DB::table('products')
        //         ->select('id', 'brand_id', 'rfq', 'slug', 'name', 'thumbnail', 'price', 'discount', 'price_status')
        //         ->where('product_status', 'product')
        //         ->where('product_type', 'software')
        //         ->inRandomOrder()
        //         ->limit(2)
        //         ->get();

        //     $hardwareProducts = DB::table('products')
        //         ->select('id', 'brand_id', 'rfq', 'slug', 'name', 'thumbnail', 'price', 'discount', 'price_status')
        //         ->where('product_status', 'product')
        //         ->where('product_type', 'hardware')
        //         ->inRandomOrder()
        //         ->limit(2)
        //         ->get();

        //     foreach ($softwareProducts as $softwareProduct) {
        //         $data['products'][] = $softwareProduct;
        //     }

        //     foreach ($hardwareProducts as $hardwareProduct) {
        //         $data['products'][] = $hardwareProduct;
        //     }
        // }

        $productColumns = ['id', 'brand_id', 'rfq', 'slug', 'name', 'thumbnail', 'price', 'discount', 'price_status'];

        $softwareProducts = DB::table('products')
            ->select($productColumns)
            ->where('product_status', 'product')
            ->where('product_type', 'software')
            ->orderByRaw('RAND()')
            ->limit(10) // Fetch 10 software products at once
            ->get();

        $hardwareProducts = DB::table('products')
            ->select($productColumns)
            ->where('product_status', 'product')
            ->where('product_type', 'hardware')
            ->orderByRaw('RAND()')
            ->limit(10) // Fetch 10 hardware products at once
            ->get();

        $data['products'] = $softwareProducts->merge($hardwareProducts)->shuffle()->take(10);




        return view('frontend.pages.home.index', $data);
    }


    public function softwareInfo()
    {
        $data['software_info'] = SoftwareInfoPage::latest()->first();
        if (!empty($data['software_info'])) {
            $data['tab_one'] = Row::where('id', $data['software_info']->row_five_tab_one_id)->first();
            $data['tab_two'] = Row::where('id', $data['software_info']->row_five_tab_two_id)->first();
            $data['tab_three'] = Row::where('id', $data['software_info']->row_five_tab_three_id)->first();
            $data['tab_four'] = Row::where('id', $data['software_info']->row_five_tab_four_id)->first();
        }
        $data['learnmore'] = LearnMore::orderBy('id', 'DESC')->select('learn_mores.industry_header', 'learn_mores.consult_title', 'learn_mores.consult_short_des', 'learn_mores.background_image')->first();
        $data['categories'] = SubCategory::with('subCatsoftwareProducts')
            ->join('products', 'sub_categories.id', '=', 'products.sub_cat_id')
            ->where('products.product_type', '=', 'software')
            ->select('sub_categories.id', 'sub_categories.slug', 'sub_categories.title', 'sub_categories.image')
            ->distinct()->inRandomOrder()->limit(12)->get();
        $data['brands'] = Brand::with('brandsoftwareProducts')
            ->join('products', 'brands.id', '=', 'products.brand_id')
            ->where('products.product_type', '=', 'software')
            ->select('brands.id', 'brands.slug', 'brands.title', 'brands.image')
            ->distinct()->inRandomOrder()->limit(12)->get();

        $data['products'] = Product::where('product_type', 'software')->where('product_status', 'product')
            ->select('products.id', 'products.rfq', 'products.slug', 'products.name', 'products.thumbnail', 'products.price', 'products.discount')
            ->inRandomOrder()
            ->limit(16)
            ->get();
        $data['industrys'] = Industry::select('industries.id', 'industries.logo', 'industries.title')->orderBy('id', 'ASC')->limit(8)->get();
        $data['random_industries'] = Industry::select('industries.id', 'industries.title')->orderBy('id', 'DESC')->limit(4)->get();
        $data['tech_datas'] = TechnologyData::where('category', 'software')->orderBy('id', 'ASC')->get();
        //dd($data['categories']);
        return view('frontend.pages.software.software_info', $data);
    }

    public function hardwareInfo()
    {
        $data['hardware_info'] = HardwareInfoPage::latest()->first();
        if (!empty($data['hardware_info'])) {
            $data['tab_one'] = Row::where('id', $data['hardware_info']->row_five_tab_one_id)->first();
            $data['tab_two'] = Row::where('id', $data['hardware_info']->row_five_tab_two_id)->first();
            $data['tab_three'] = Row::where('id', $data['hardware_info']->row_five_tab_three_id)->first();
            $data['tab_four'] = Row::where('id', $data['hardware_info']->row_five_tab_four_id)->first();
        }
        $data['learnmore'] = LearnMore::orderBy('id', 'DESC')->select('learn_mores.industry_header', 'learn_mores.consult_title', 'learn_mores.consult_short_des', 'learn_mores.background_image')->first();
        $data['categories'] = Category::with('subCathardwareProducts')
            ->join('products', 'categories.id', '=', 'products.cat_id')
            ->where('products.product_type', '=', 'hardware')
            ->select('categories.id', 'categories.slug', 'categories.title', 'categories.image')
            ->distinct()->inRandomOrder()->limit(12)->get();
        $data['products'] = Product::where('product_type', 'hardware')->where('product_status', 'product')
            ->select('products.id', 'products.rfq', 'products.slug', 'products.name', 'products.thumbnail', 'products.price', 'products.discount')
            ->inRandomOrder()
            ->limit(16)
            ->get();
        $data['brands'] = Brand::with('brandhardwareProducts')
            ->join('products', 'brands.id', '=', 'products.brand_id')
            ->where('products.product_type', '=', 'hardware')
            ->select('brands.id', 'brands.slug', 'brands.title', 'brands.image')
            ->distinct()->inRandomOrder()->limit(12)->get();
        $data['industrys'] = Industry::select('industries.id', 'industries.logo', 'industries.title')->orderBy('id', 'ASC')->limit(8)->get();
        $data['tech_datas'] = TechnologyData::where('category', 'hardware')->orderBy('id', 'ASC')->get();
        $data['random_industries'] = Industry::select('industries.id', 'industries.title')->orderBy('id', 'DESC')->limit(4)->get();
        return view('frontend.pages.hardware.hardware_info', $data);
    }




    public function SoftwareCommon()
    {
        $learnMore = LearnMore::orderBy('id', 'DESC')
            ->select('learn_mores.industry_header', 'learn_mores.consult_title', 'learn_mores.consult_short_des', 'learn_mores.background_image')->first();

        $products = Product::where('product_type', 'software')
            ->where('product_status', 'product')
            ->orderByRaw('RAND()')
            ->limit(16)
            ->get(['id', 'rfq', 'slug', 'name', 'thumbnail', 'price', 'discount']);

        $categories = SubCategory::with('subCatsoftwareProducts')
            ->join('products', 'sub_categories.id', '=', 'products.sub_cat_id')
            ->where('products.product_type', '=', 'software')
            ->select('sub_categories.id', 'sub_categories.slug', 'sub_categories.title', 'sub_categories.image')
            ->distinct()->orderByRaw('RAND()')->limit(12)->get();
        $brands = Brand::with('brandsoftwareProducts')
            ->join('products', 'brands.id', '=', 'products.brand_id')
            ->where('products.product_type', '=', 'software')
            ->select('brands.id', 'brands.slug', 'brands.title', 'brands.image')
            ->distinct()->orderByRaw('RAND()')->limit(12)->get();

        $solutions = SolutionDetail::orderBy('id', 'DESC')->limit(10)->get(['id', 'name']);

        $randomClientStories = ClientStory::inRandomOrder()->limit(2)->get();
        $story3 = $randomClientStories->first();
        $story4 = $randomClientStories->last();

        // Use cached results for 'story1' and 'story2' as they are random blog posts
        $randomBlogPosts = Blog::inRandomOrder()->limit(2)->get();
        $story1 = $randomBlogPosts->first();
        $story2 = $randomBlogPosts->last();

        $tech_datas = TechnologyData::where('category', 'software')->orderBy('id', 'ASC')->get();

        $industrys = Industry::orderBy('id', 'ASC')->limit(8)->get(['id', 'logo', 'title']);
        $random_industries = Industry::orderBy('id', 'DESC')->limit(4)->get(['id', 'title']);

        return view('frontend.pages.software.allsoftware', compact('learnMore', 'products', 'categories', 'brands', 'solutions', 'story1', 'story2', 'story3', 'story4', 'tech_datas', 'industrys', 'random_industries'));
    }

    //Hardware All Pge

    public function HardwareCommon()
    {
        // Query 1 - LearnMore

        $data['learnmore'] = LearnMore::orderBy('id', 'DESC')
            ->select('learn_mores.industry_header', 'learn_mores.consult_title', 'learn_mores.consult_short_des', 'learn_mores.background_image')->first();

        // Query 2 - Products (Software)
        $data['products'] = Product::where('product_type', 'software')
            ->where('product_status', 'product')
            ->orderByRaw('RAND()')
            ->limit(16)
            ->get(['id', 'rfq', 'slug', 'name', 'thumbnail', 'price', 'discount']);

        $data['categories'] = Category::with('subCathardwareProducts')
            ->join('products', 'categories.id', '=', 'products.cat_id')
            ->where('products.product_type', '=', 'hardware')
            ->select('categories.id', 'categories.slug', 'categories.title', 'categories.image')
            ->distinct()->orderByRaw('RAND()')->limit(12)->get();

        $data['brands'] = Brand::with('brandhardwareProducts')
            ->join('products', 'brands.id', '=', 'products.brand_id')
            ->where('products.product_type', '=', 'hardware')
            ->select('brands.id', 'brands.slug', 'brands.title', 'brands.image')
            ->distinct()->orderByRaw('RAND()')->limit(12)->get();

        // Query 5 - SolutionDetail
        $data['solutions'] = SolutionDetail::orderBy('id', 'DESC')->limit(10)->get(['id', 'name']);

        $randomClientStories = ClientStory::inRandomOrder()->limit(2)->get();
        $data['story3'] = $randomClientStories->first();
        $data['story4'] = $randomClientStories->last();

        // Use cached results for 'story1' and 'story2' as they are random blog posts
        $randomBlogPosts = Blog::inRandomOrder()->limit(2)->get();
        $data['story1'] = $randomBlogPosts->first();
        $data['story2'] = $randomBlogPosts->last();

        $data['tech_datas'] = TechnologyData::where('category', 'hardware')->orderBy('id', 'ASC')->get();
        $data['industrys'] = Industry::select('industries.id', 'industries.logo', 'industries.title', 'industries.slug')->orderBy('id', 'ASC')->limit(8)->get();
        $data['random_industries'] = Industry::select('industries.id', 'industries.title', 'industries.slug')->orderBy('id', 'DESC')->limit(4)->get();

        return view('frontend.pages.hardware.allhardware', $data);
    }







    //Learn More


    public function LearnMore()
    {
        $learnmore = LearnMore::with([
            'successStoryOne',
            'successStoryTwo',
            'successStoryThree',
        ])->orderBy('id', 'DESC')->first();

        if ($learnmore) {
            $data['learnmore'] = $learnmore;
            $data['story1'] = $learnmore->successStoryOne;
            $data['story2'] = $learnmore->successStoryTwo;
            $data['story3'] = $learnmore->successStoryThree;
        }

        $data['industrys'] = Industry::select('id', 'logo', 'title')
            ->orderBy('id', 'ASC')
            ->limit(8)
            ->get();

        $data['random_industries'] = Industry::select('id', 'title')
            ->orderBy('id', 'DESC')
            ->limit(4)
            ->get();

        return view('frontend.pages.learnmore.view', $data);
    }


    //About
    public function about()
    {
        $data['about'] = AboutUs::latest('id', 'desc')->first();
        if ($data['about']) {

            $data['row1'] = Row::where('id', $data['about']->row_one_id)->first();
            $data['row2'] = Row::where('id', $data['about']->row_two_id)->first();
            $data['row3'] = Row::where('id', $data['about']->row_three_id)->first();
        }
        $data['pdfs'] = DocumentPdf::where('category', 'company')->latest('id', 'desc')->limit(4)->get(['document', 'button_name', 'button_link']);
        return view('frontend.pages.about.about', $data);
    }

    //What We Do

    public function whatWeDo()
    {
        $data['whatwedo'] = WhatWeDoPage::latest('id', 'desc')->first();
        if (!empty($data['whatwedo'])) {
            $data['row_two'] = Row::where('id', $data['whatwedo']->row_two_id)->first();
            $data['row_three'] = Row::where('id', $data['whatwedo']->row_three_id)->first();
        }
        return view('frontend.pages.whatwedo.whatwedo', $data);
    }


    //Feature Details
    public function FeatureDetails($id)
    {
        $data['learnmore'] = LearnMore::orderBy('id', 'DESC')->select('learn_mores.industry_header', 'learn_mores.consult_title', 'learn_mores.consult_short_des', 'learn_mores.background_image')->first();
        $data['feature'] = Feature::with(['rowOne', 'rowTwo'])
            ->where('id', $id)->first();

        $data['row_one'] = $data['feature']->rowOne;
        $data['row_two'] = $data['feature']->rowTwo;

        $data['features'] = Feature::with('rowOne', 'rowTwo')
            ->where('id', '!=', $id)->select('logo', 'id', 'badge', 'header')->get();
        return view('frontend.pages.feature.feature_details', $data);
    }

    public function allSolution()
    {
        $data['learnmore'] = LearnMore::orderBy('id', 'DESC')->select('learn_mores.industry_header', 'learn_mores.consult_title', 'learn_mores.consult_short_des', 'learn_mores.background_image')->first();
        $data['solutions'] = SolutionDetail::orderBy('id', 'DESC')->select('solution_details.id', 'solution_details.name', 'solution_details.header', 'solution_details.banner_image', 'solution_details.slug')->get();
        $data['industrys'] = Industry::select('industries.id', 'industries.logo', 'industries.title')->orderBy('id', 'ASC')->limit(8)->get();
        $data['random_industries'] = Industry::select('industries.id', 'industries.title')->orderBy('id', 'DESC')->limit(4)->get();
        $data['story3'] = ClientStory::inRandomOrder()->first();
        $data['story4'] = ClientStory::inRandomOrder()->where('id', '!=', $data['story3']->id)->first();
        $data['story1'] = Blog::inRandomOrder()->first();
        $data['story2'] = Blog::inRandomOrder()->where('id', '!=', $data['story1']->id)->first();
        $data['techglossy'] = TechGlossy::inRandomOrder()->first();
        $data['tech_datas'] = TechnologyData::where('category', 'solution')->orderBy('id', 'ASC')->get();


        return view('frontend.pages.solution.allsolution', $data);
    }

    //Feature Details
    public function SolutionDetails($id)
    {
        $data['solution'] = SolutionDetail::with(
            'rowOne',
            'card1',
            'card2',
            'card3',
            'card4',
            'card5',
            'card6',
            'card7',
            'card8',
            'rowFour'
        )->where('slug', $id)->first();

        $data['solutions'] = SolutionDetail::where('id', '!=', $id)->get();
        return view('frontend.pages.solution.solution_details', $data);
    }




    //Contact, Support, Location, RFQ

    public function location()
    {
        $data['setting'] = Site::latest()->first();
        $data['locations'] = OfficeLocation::orderBy('name', 'ASC')->get();
        $country_ids = $data['locations']->pluck('country_id')->unique()->toArray();
        $data['countries']  = Country::whereIn('id', $country_ids)->get();
        $data['tech_datas'] = TechnologyData::where('category', 'location')->orderBy('id', 'desc')->limit(6)->get();
        return view('frontend.pages.contact.location', $data);
    }

    public function contact()
    {
        $data['setting'] = Site::latest()->first();
        return view('frontend.pages.contact.contact', $data);
    }

    public function Support()
    {
        $data['setting'] = Site::latest()->first();
        return view('frontend.pages.contact.support', $data);
    }

    public function RFQCommon()
    {
        $data['setting'] = Site::latest()->first();
        return view('frontend.pages.common.rfq_common', $data);
    }




    //Client Story All Controller
    public function AllStory()
    {
        $data['tag'] = DB::table('client_stories')->pluck('tags');
        $data['tag_items'] = json_decode($data['tag'], true);
        $data['featured_storys'] = ClientStory::where('featured', '=', '1')->inRandomOrder()->limit(4)->get();
        $data['client_storys'] = ClientStory::orderBy('id', 'Desc')->paginate(3);
        $data['industries'] = Industry::latest()->select('id', 'title')->limit(6)->get();
        $data['categories'] = Category::latest()->select('id', 'title', 'slug')->limit(6)->get();
        $data['brands'] = Brand::latest()->select('id', 'title', 'slug')->limit(6)->get();

        return view('frontend.pages.story.all_story', $data);
    }

    public function StoryDetails($id)
    {

        $data['blog'] = ClientStory::where('id', $id)->first();
        $data['storys'] = ClientStory::inRandomOrder()->limit(4)->get();
        return view('frontend.pages.story.story_details', $data);
    }




    //Blogs All Controller

    public function AllBlog()
    {
        $data['tag'] = DB::table('blogs')->pluck('tags');
        $data['tag_items'] = json_decode($data['tag'], true);
        $data['featured_storys'] = Blog::where('featured', '=', '1')->inRandomOrder()->limit(4)->get();
        $data['client_storys'] = Blog::orderBy('id', 'Desc')->paginate(3);
        $data['industries'] = Industry::latest()->select('id', 'title')->limit(6)->get();
        $data['categories'] = Category::latest()->select('id', 'title', 'slug')->limit(6)->get();
        $data['brands'] = Brand::latest()->select('id', 'title', 'slug')->limit(6)->get();
        return view('frontend.pages.blogs.blogs_all', $data);
    }

    public function BlogDetails($id)
    {
        $data['blog'] = Blog::where('id', $id)->first();
        $data['storys'] = Blog::inRandomOrder()->limit(4)->get();
        return view('frontend.pages.blogs.blog_details', $data);
    }



    //Tech Glossy All Controller

    public function AllTechGlossy()
    {
        $data['tag'] = DB::table('tech_glossies')->pluck('tags');
        $data['tag_items'] = json_decode($data['tag'], true);
        $data['featured_storys'] = TechGlossy::where('featured', '=', '1')->inRandomOrder()->limit(4)->get();
        $data['client_storys'] = TechGlossy::orderBy('id', 'Desc')->paginate(3);
        $data['industries'] = Industry::latest()->select('id', 'title')->limit(6)->get();
        $data['categories'] = Category::latest()->select('id', 'title', 'slug')->limit(6)->get();
        $data['brands'] = Brand::latest()->select('id', 'title', 'slug')->limit(6)->get();
        return view('frontend.pages.tech.techglossy_all', $data);
    }

    public function TechGlossyDetails($id)
    {
        //$data['industry'] = Industry::where('id',$id)->first();
        $data['techglossy'] = TechGlossy::where('id', $id)->first();
        //$data['industry_page'] = IndustryPage::where('industry_id', $data['industry']->id)->get();
        $data['storys'] = TechGlossy::inRandomOrder()->limit(7)->get();
        return view('frontend.pages.tech.techglossy_details', $data);
    }


    //Shop All Controller

    public function shop_html()
    {
        $data['products'] = Product::inRandomOrder()->where('product_status', 'product')
            ->select('products.id', 'products.rfq', 'products.slug', 'products.name', 'products.thumbnail', 'products.price', 'products.discount')
            ->limit(16)
            ->get();
        $data['all_categories'] = Category::orderBy('id', 'DESC')->limit(8)->get();
        $data['software_categories'] = DB::table('sub_categories')
            ->join('products', 'sub_categories.id', '=', 'products.sub_cat_id')
            ->where('products.product_type', '=', 'software')
            ->select('sub_categories.id', 'sub_categories.slug', 'sub_categories.title', 'sub_categories.image')
            ->distinct()->get();
        $data['hardware_categories'] = DB::table('sub_categories')
            ->join('products', 'sub_categories.id', '=', 'products.sub_cat_id')
            ->where('products.product_type', '=', 'hardware')
            ->select('sub_categories.id', 'sub_categories.slug', 'sub_categories.title', 'sub_categories.image')
            ->distinct()->get();
        // dd($data['hardware_categories']);
        $data['training_categories'] = DB::table('categories')
            ->join('products', 'categories.id', '=', 'products.cat_id')
            ->where('products.product_type', '=', 'training')
            ->select('categories.id', 'categories.slug', 'categories.title', 'categories.image')
            ->distinct()->get();
        $data['book_categories'] = DB::table('categories')
            ->join('products', 'categories.id', '=', 'products.cat_id')
            ->where('products.product_type', '=', 'book')
            ->select('categories.id', 'categories.slug', 'categories.title', 'categories.image')
            ->distinct()->get();
        $data['categories'] = Category::latest()
            ->select('categories.id', 'categories.slug', 'categories.title', 'categories.image')
            ->get();
        $data['brands'] = BrandPage::orderBy('id', 'Desc')
            ->select('brand_pages.id', 'brand_pages.brand_id')
            ->limit(18)
            ->get();
        $data['techglossy'] = Blog::inRandomOrder()->first();
        return view('frontend.pages.product.shop_html', $data);
    }


    //Tech Deals
    public function TechDeal()
    {
        $data['products'] = Product::whereNotNull('deal')->where('product_status', 'product')->paginate(10);
        $data['brands'] = DB::table('brands')
            ->join('products', 'brands.id', '=', 'products.brand_id')
            ->whereNotNull('products.deal')
            ->select('brands.id', 'brands.slug', 'brands.title', 'brands.image')
            ->distinct()->get();
        $data['categories'] = DB::table('categories')
            ->join('products', 'categories.id', '=', 'products.cat_id')
            ->whereNotNull('products.deal')
            ->select('categories.id', 'categories.slug', 'categories.title', 'categories.image')
            ->distinct()->get();

        $data['refurbished_products'] = Product::where('refurbished', '1')->where('product_status', 'product')->get();
        return view('frontend.pages.tech.deal', $data);
    }

    public function Refurbished()
    {
        $data['products'] = Product::where('refurbished', '1')->where('product_status', 'product')->paginate(10);
        $data['brands'] = DB::table('brands')
            ->join('products', 'brands.id', '=', 'products.brand_id')
            ->where('products.refurbished', '=', '1')
            ->select('brands.id', 'brands.slug', 'brands.title', 'brands.image')
            ->distinct()->get();
        $data['categories'] = DB::table('categories')
            ->join('products', 'categories.id', '=', 'products.cat_id')
            ->where('products.refurbished', '=', '1')
            ->select('categories.id', 'categories.slug', 'categories.title', 'categories.image')
            ->distinct()->get();
        //dd($data['categories']);
        $data['techdeal_products'] = Product::whereNotNull('deal')->where('product_status', 'product')->get();
        return view('frontend.pages.tech.refurbished', $data);
    }




    //Product Details

    public function ProductDetails($id)
    {
        //dd($id);

        $data['sproduct'] = Product::where('slug', $id)->where('product_status', 'product')->first();
        //dd($data['sproduct']);


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

        return view('frontend.pages.product.product_details', $data);
    }





    //Category All PAge


    public function CategoryCommon($category)
    {
        if ((Category::where('slug', $category)->count()) > 0) {
            $data['category'] = Category::where('slug', $category)->first();
            $data['sub_cats'] = SubCategory::where('cat_id', $data['category']->id)->get();
            $data['sub_sub_cats'] = SubSubCategory::where('cat_id', $data['category']->id)->get();
            //$data['sub_sub_sub_cats'] = SubSubSubCategory::where('cat_id',$data['category']->id)->get();

            $data['products'] = Product::where('cat_id', $data['category']->id)->where('product_status', 'product')
                ->select('products.id', 'products.rfq', 'products.slug', 'products.name', 'products.thumbnail', 'products.price', 'products.discount')
                ->paginate(8);

            $data['brands'] = DB::table('brands')
                ->join('products', 'brands.id', '=', 'products.brand_id')
                ->join('categories', 'products.cat_id', '=', 'categories.id')
                ->where('categories.id', '=', $data['category']->id)
                ->select('brands.id', 'brands.title', 'brands.image', 'brands.slug')
                ->distinct()
                ->paginate(18);
            $data['condition'] = 'category';
            $data['cat_title'] = '';
        } elseif ((SubCategory::where('slug', $category)->count()) > 0) {
            $data['category'] = SubCategory::where('slug', $category)->first();
            $data['sub_cats'] = SubSubCategory::where('sub_cat_id', $data['category']->id)->get();
            $data['sub_sub_cats'] = SubSubSubCategory::where('sub_sub_cat_id', $data['category']->id)->get();
            //$data['sub_sub_sub_cats'] = SubSubSubCategory::where('cat_id',$data['category']->id)->get();

            $data['products'] = Product::where('sub_cat_id', $data['category']->id)->where('product_status', 'product')
                ->select('products.id', 'products.rfq', 'products.slug', 'products.name', 'products.thumbnail', 'products.price', 'products.discount')
                ->paginate(8);
            $data['brands'] = DB::table('brands')
                ->join('products', 'brands.id', '=', 'products.brand_id')
                ->join('sub_categories', 'products.sub_cat_id', '=', 'sub_categories.id')
                ->where('sub_categories.id', '=', $data['category']->id)
                ->select('brands.id', 'brands.title', 'brands.image', 'brands.slug')
                ->distinct()
                ->paginate(18);
            $data['condition'] = 'subcategory';
            $data['cat_title'] = Category::where('id', $data['category']->cat_id)->select('title', 'slug')->first();
        } elseif ((SubSubCategory::where('slug', $category)->count()) > 0) {
            $data['category'] = SubSubCategory::where('slug', $category)->first();
            $data['sub_cats'] = '';
            $data['sub_sub_cats'] = '';
            //$data['sub_sub_sub_cats'] = SubSubSubCategory::where('cat_id',$data['category']->id)->get();

            $data['products'] = Product::where('sub_sub_cat_id', $data['category']->id)->where('product_status', 'product')
                ->select('products.id', 'products.rfq', 'products.slug', 'products.name', 'products.thumbnail', 'products.price', 'products.discount')
                ->paginate(8);
            $data['brands'] = DB::table('brands')
                ->join('products', 'brands.id', '=', 'products.brand_id')
                ->join('sub_sub_categories', 'products.sub_sub_cat_id', '=', 'sub_sub_categories.id')
                ->where('sub_sub_categories.id', '=', $data['category']->id)
                ->select('brands.id', 'brands.title', 'brands.image', 'brands.slug')
                ->distinct()
                ->paginate(18);
            $data['condition'] = 'subsubcategory';
            $data['cat_title'] = Category::where('id', $data['category']->cat_id)->select('title', 'slug')->first();
            $data['sub_cat_title'] = SubCategory::where('id', $data['category']->sub_cat_id)->select('title', 'slug')->first();
        }

        return view('frontend.pages.category.category', $data);
    }


    public function AllCategory()
    {
        $data['categorys'] = Category::orderBy('title', 'ASC')->limit(8)->get();
        $data['others'] = Category::orderBy('title', 'ASC')->select('categories.id', 'categories.slug', 'categories.title')->get();
        $data['sub_cats'] = SubCategory::orderBy('title', 'ASC')->select('sub_categories.id', 'sub_categories.slug', 'sub_categories.title', 'sub_categories.image')->get();
        $data['sub_sub_cats'] = SubSubCategory::orderBy('title', 'ASC')->select('sub_sub_categories.id', 'sub_sub_categories.slug', 'sub_sub_categories.title', 'sub_sub_categories.image')->get();
        $data['sub_sub_sub_cats'] = SubSubSubCategory::orderBy('title', 'ASC')->select('sub_sub_sub_categories.id', 'sub_sub_sub_categories.slug', 'sub_sub_sub_categories.title', 'sub_sub_sub_categories.image')->get();

        $data['products'] = DB::table('products')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.id', 'products.rfq', 'products.slug', 'products.name', 'products.thumbnail', 'products.price', 'products.discount')
            ->where('brands.category', '=', 'Top')
            ->limit(16)
            ->get();

        return view('frontend.pages.category.category_all', $data);
    }



    ///Brand All Page


    public function BrandCommon($brand)
    {
        //dd($brand);
        $data['brand'] = Brand::where('slug', $brand)->first();
        $data['top_brands'] = BrandPage::orderBy('id', 'Desc')->limit(10)->get();
        //dd($data['top_brands']);
        $data['featured_brands'] = Brand::where('category', 'featured')->get();
        $data['others'] = Brand::where('category', 'others')->get();

        $data['products'] = Product::where('brand_id', $data['brand']->id)->where('product_status', 'product')->get();
        $data['categories'] = DB::table('categories')
            ->join('products', 'categories.id', '=', 'products.cat_id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->where('brands.id', '=', $brand)
            ->select('categories.id', 'categories.title', 'categories.image', 'categories.slug')
            ->get();

        return view('frontend.pages.brand.brand_common', $data);
    }

    public function BrandPage($id)
    {
        $data['brand'] = Brand::where('slug', $id)->select('id', 'slug', 'title')->first();
        $data['brandpage'] = BrandPage::where('brand_id', $data['brand']->id)->first();
        if (!empty($data['brandpage'])) {
            $data['storys'] = ClientStory::inRandomOrder()->limit(4)->get();

            $data['products'] = Product::where('brand_id', $data['brand']->id)
                ->where('product_status', '=', 'product')
                ->distinct()
                ->select('products.id', 'products.rfq', 'products.slug', 'products.name', 'products.thumbnail', 'products.price', 'products.discount')
                ->limit(12)
                ->get();


            if ($data['brandpage']) {
                $data['row_one'] = Row::where('id', $data['brandpage']->row_four_id)->first();
                $data['row_three'] = Row::where('id', $data['brandpage']->row_five_id)->first();
                $data['row_four'] = Row::where('id', $data['brandpage']->row_seven_id)->first();
                $data['row_five'] = Row::where('id', $data['brandpage']->row_eight_id)->first();
                $data['card1'] = SolutionCard::where('id', $data['brandpage']->solution_card_one_id)->first();
                $data['card2'] = SolutionCard::where('id', $data['brandpage']->solution_card_two_id)->first();
                $data['card3'] = SolutionCard::where('id', $data['brandpage']->solution_card_three_id)->first();
            }

            return view('frontend.pages.brand.brand_page', $data);
        } else {
            Toastr::error('No Details information found for this Brand.');
            return redirect()->back();
        }
    }

    public function AllBrand()
    {
        $data['top_brands'] = BrandPage::orderBy('id', 'Desc')->select('brand_pages.brand_id', 'brand_pages.id')->paginate(18);
        $data['featured_brands'] = Brand::where('category', 'Featured')->orderBy('id', 'DESC')->paginate(18);
        $data['featured_techglossys'] = Blog::inRandomOrder()->first();
        $data['others'] = Brand::select('brands.id', 'brands.title', 'brands.slug')->orderBy('title', 'ASC')->get();
        return view('frontend.pages.brand.brand', $data);
    }





    //Industry All Page

    public function AllIndustry()
    {

        $data = [];

        $data['learnmore'] = LearnMore::orderBy('id', 'DESC')->select('learn_mores.industry_header', 'learn_mores.consult_title', 'learn_mores.consult_short_des', 'learn_mores.background_image')->first();
        $data['industrys'] = Industry::select('industries.id', 'industries.logo', 'industries.title', 'industries.slug')->orderBy('id', 'ASC')->limit(8)->get();
        $data['random_industries'] = Industry::select('industries.id', 'industries.title', 'industries.slug')->orderBy('id', 'DESC')->limit(4)->get();

        // Use cached results for 'story3' and 'story4' as they are random client stories
        $randomClientStories = ClientStory::inRandomOrder()->limit(2)->get();
        $data['story3'] = $randomClientStories->first();
        $data['story4'] = $randomClientStories->last();

        // Use cached results for 'story1' and 'story2' as they are random blog posts
        $randomBlogPosts = Blog::inRandomOrder()->limit(2)->get();
        $data['story1'] = $randomBlogPosts->first();
        $data['story2'] = $randomBlogPosts->last();

        // Use cached result for 'techglossy' as it is a random TechGlossy entry
        $data['techglossy'] = TechGlossy::inRandomOrder()->first();

        // Use cached results for 'tech_datas' as they are technology data with a specific category
        $techDatas = TechnologyData::where('category', 'industry')->orderBy('id', 'ASC')->get();
        $data['tech_datas'] = $techDatas;
        return view('frontend.pages.industry.all_industry', $data);
    }

    public function IndustryDetails($id)
    {
        $data['industry'] = Industry::where('slug', $id)->with([
            'industryPage.rowOne',
            'industryPage.rowThree',
            'industryPage.rowFive',
            'industryPage.solutionCardOne',
            'industryPage.solutionCardTwo',
            'industryPage.solutionCardThree',
            'industryPage.solutionCardFour',
        ])->first();

        if (isset($data['industry']->industryPage)) {
            if (!empty($data['industry']->industryPage)) {
                $data['storys'] = Blog::inRandomOrder()
                    ->whereJsonContains('industry_id', $data['industry']->id)
                    ->limit(4)
                    ->get();

                $data['techglossy'] = Techglossy::whereJsonContains('industry_id', $data['industry']->id)->first();

                $data['solutions'] = SolutionDetail::where('industry_id', $data['industry']->id)->get();

                $data['product_ids'] = MultiIndustry::where('industry_id', $data['industry']->id)->pluck('product_id');

                $data['products'] = Product::whereIn('id', $data['product_ids'])
                    ->limit(16)
                    ->get(['id', 'rfq', 'slug', 'name', 'thumbnail', 'price', 'discount', 'price_status', 'brand_id']);
            }



            return view('frontend.pages.industry.industry_details', $data);
        } else {
            Toastr::error('No Details information found for this Industry.');
            return redirect()->back();
        }
    }














    //Search All Controller

    public function search(Request $request)
    {
        if ($request->keyword != '') {
            $sproducts = Product::where('title', 'LIKE', '%' . $request->keyword . '%')->where('product_status', 'product')->get();
        }
        return response()->json([
            'sproducts' => $sproducts
        ]);
    }


    // Product Seach
    public function ProductSearch(Request $request)
    {

        $request->validate(["search" => "required"]);

        $item = $request->search;
        //dd($request->search);
        // echo "$item";
        //$categories = Category::orderBy('title','ASC')->get();
        if (Product::where('name', $item)->where('product_status', 'product')->where('product_status', 'product')->first()) {
            $data['sproduct'] = Product::where('name', $item)->where('product_status', 'product')->where('product_status', 'product')->first();
            $data['products'] = Product::where('cat_id', $data['sproduct']->cat_id)->where('product_status', 'product')->where('product_status', 'product')->get();
            return view('frontend.pages.product.product_details', $data);
        } else {
            $data['categories'] = Category::orderBy('title', 'ASC')->get();
            $data['brands'] = Brand::orderBy('title', 'ASC')->get();
            $data['newProduct'] = Product::orderBy('id', 'DESC')->where('product_status', 'product')->limit(3)->get();
            $data['products'] = Product::where('name', 'LIKE', '%' . $item . '%')->where('product_status', 'product')->paginate(10);
            return view('frontend.pages.product.shop_page', $data);
        }
    } // end method


    /// Advance Search Options
    public function globalSearch(Request $request)
    {
        $query = $request->get('term', '');
        $data['products'] = Product::where('name', 'LIKE', '%' . $query . '%')->where('product_status', 'product')->limit(5)->get(['id', 'name', 'slug', 'thumbnail', 'price', 'discount', 'rfq', 'qty', 'stock']);
        $data['solutions'] = SolutionDetail::where('name', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'name']);
        $data['industries'] = Industry::where('title', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'title']);
        $data['blogs'] = Blog::where('title', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'title']);
        $data['categorys'] = Category::where('title', 'LIKE', '%' . $query . '%')->limit(2)->get(['id', 'title', 'slug']);
        $data['subcategorys'] = SubCategory::where('title', 'LIKE', '%' . $query . '%')->limit(2)->get(['id', 'title', 'slug']);
        $data['subsubcategorys'] = SubSubCategory::where('title', 'LIKE', '%' . $query . '%')->limit(1)->get(['id', 'title', 'slug']);
        $data['brands'] = Brand::where('title', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'title', 'slug']);
        $data['storys'] = ClientStory::where('title', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'title']);
        $data['tech_glossys'] = TechGlossy::where('title', 'LIKE', '%' . $query . '%')->limit(5)->get(['id', 'title']);

        return response()->json(view('frontend.partials.search', $data)->render());
    } // end method



    //Terms & Policy
    public function TermsPolicy()
    {
        $data['terms'] = Policy::where('condition', 'terms')->get();
        $data['sale_terms'] = Policy::where('condition', 'sale_terms')->get();
        $data['service_terms'] = Policy::where('condition', 'service_terms')->get();
        return view('frontend.pages.policy.terms_policy', $data);
    }
    public function PrivacyPolicy()
    {
        $data['policy'] = Policy::where('condition', 'policy')->get();
        return view('frontend.pages.policy.privacy_policy', $data);
    }
    public function faq()
    {
        $data['faq_categorys'] = Faq::select('category')->distinct()->get();
        return view('frontend.pages.policy.faq', $data);
    }


    public function Portfolio()
    {
        $data['portfolio'] = PortfolioPage::latest('id', 'desc')->first();
        $data['categories'] = PortfolioCategory::orderBy('id', 'ASC')->get();
        $data['teams'] = PortfolioTeam::orderBy('id', 'ASC')->get();
        $data['chooses'] = PortfolioChooseUs::orderBy('id', 'ASC')->get();
        $data['clients'] = PortfolioClient::orderBy('id', 'ASC')->get();
        $data['feedbacks'] = PortfolioClientFeedback::orderBy('id', 'ASC')->get();
        return view('frontend.pages.portfolio.portfolio', $data);
    }

    public function portfolioDetails($id)
    {
        $data['portfolio'] = PortfolioDetails::findOrFail($id);
        if (!empty($data['portfolio'])) {
            $data['clients'] = PortfolioClientFeedback::where('portfolio_details_id', $id)->get();
        } else {
            $data['clients'] = null;
        }

        return view('frontend.pages.portfolio.portfolio_details', $data);
    }



    //Common Products

    public function ProductCommon($id)
    {


        $data['products'] = Product::where('product_type', $id)->where('product_status', 'product')->get();
        // $data['brands'] = DB::table('brands')
        //                 ->join('products', 'brands.id', '=', 'products.brand_id')
        //                 ->join('categories','products.cat_id', '=','categories.id' )
        //                 ->where('categories.id', '=', $category)
        //                 ->select('brands.id','brands.title','brands.image')
        //                 ->get();

        return view('frontend.pages.product.product_common', $data);
    }

    public function rfqCreate(Request $request)
    {

        $data['sales_mans'] = User::where('role', 'sales')->select('users.id', 'users.name')->get();
        return view('frontend.pages.rfq.rfq', $data);
    }
}
