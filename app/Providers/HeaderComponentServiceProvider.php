<?php

namespace App\Providers;

use View;
use App\Models\Site;
use App\Models\Admin\Blog;
use App\Models\Admin\Feature;
use App\Models\Admin\Category;
use App\Models\Admin\BrandPage;
use App\Models\Admin\TechGlossy;
use App\Models\Admin\ClientStory;
use App\Models\Admin\IndustryPage;
use App\Models\Admin\SolutionDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\ServiceProvider;

class HeaderComponentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        View::composer('frontend.partials.header', function ($view) {
            $setting = Site::first();

            // Load industries with eager loading
            $industrys = IndustryPage::orderByDesc('id')
                ->limit(4)
                ->get(['id', 'industry_id']);

            // Load features with eager loading and caching
            $featuresAndEvents = Feature::orderByRaw('RAND()')
                ->limit(4)
                ->select('id', 'title', 'image', 'created_at', 'badge')
                ->get();


            $features = $featuresAndEvents->take(2);
            $feature_events = $featuresAndEvents->skip(2)->take(2);

            // Load solution details with eager loading and caching
            $solutions = SolutionDetail::orderByDesc('id')
                ->orderByRaw('RAND()')
                ->limit(4)
                ->get(['id', 'name', 'slug']);

            // Load brand pages with eager loading and caching
            $brands = BrandPage::orderByDesc('id')
                ->orderByRaw('RAND()')
                ->limit(8)
                ->get(['id', 'brand_id']);

            // Load categories with caching
            $categorys = Category::orderByDesc('id')
                ->limit(8)
                ->get(['id', 'slug', 'title']);

            // Load featured blogs with caching
            $blogs = Blog::where('featured', '1')
                ->orderByRaw('RAND()')
                ->limit(2)
                ->select('id', 'badge', 'title', 'image', 'created_at', 'created_by')
                ->get();

            // Load featured client stories with caching
            $clientstorys = ClientStory::where('featured', '1')
                ->orderByRaw('RAND()')
                ->limit(2)
                ->select('id', 'badge', 'image', 'title', 'created_at', 'created_by')
                ->get();

            // Load featured tech glossies with caching
            $techglossys = TechGlossy::where('featured', '1')
                ->orderByRaw('RAND()')
                ->limit(2)
                ->select('id', 'badge', 'title', 'image', 'created_at', 'created_by')
                ->get();
            $cart_qty = Cart::count();

            // Load all jobs
            // $jobs = Job::all();

            // Load latest categories (assuming 'id' is the primary key and already indexed)
            $categories = Category::latest('id')
                ->limit(10)
                ->get(['id', 'slug', 'title']);

            $view->with(compact(
                'setting',
                'industrys',
                'features',
                'feature_events',
                'solutions',
                'brands',
                'categorys',
                'blogs',
                'clientstorys',
                'techglossys',
                'categories',
                'cart_qty'
            ));
        });
    }
}
