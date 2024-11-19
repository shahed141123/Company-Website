<?php

namespace App\Providers;

use Exception;
use App\Models\Site;
use App\Models\User;
use App\Models\Admin\Blog;
use App\Models\Admin\Brand;
use App\Models\Admin\Feature;
use App\Models\Admin\Product;
use App\Models\Admin\Category;
use App\Models\Admin\Industry;
use App\Models\Admin\SolutionDetail;
use App\Models\Admin\TechGlossy;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('all_employees', null);
        View::share('productCount', null);
        View::share('brandCount', null);
        View::share('limit_words', null);
        View::share('setting', null);
        View::share('industrys', null);
        View::share('solutions', null);
        View::share('header_categories', null);
        View::share('brands', null);
        View::share('features', null);
        View::share('blog', null);
        View::share('techglossy', null);

        try {
            if (Schema::hasTable('users')) {
                View::share('all_employees', User::get());
            }
            if (Schema::hasTable('products')) {
                View::share('productCount', Product::where('product_status', 'product')->count());
            }
            if (Schema::hasTable('brands')) {
                View::share('brandCount', Brand::count());
            }

            if (Schema::hasTable('sites')) {
                View::share('setting', Site::first());
            }
            if (Schema::hasTable('industries')) {
                View::share('industrys', Industry::with('industryPage')->latest('id')->get(['id', 'title', 'slug']));
            }
            if (Schema::hasTable('solution_details')) {
                View::share('solutions', SolutionDetail::take(4)->inRandomOrder()->get(['id', 'name', 'slug']));
            }
            if (Schema::hasTable('categories')) {
                View::share('header_categories', Category::with('subCategorys.subsubCategorys.subsubsubCategorys')
                ->orderBy('id', 'asc')->limit(10)
                ->get(['id', 'slug', 'title']));
            }
            if (Schema::hasTable('brands')) {
                View::share('brands', Brand::with('brandPage')->inRandomOrder()->take(20)->get(['id', 'slug', 'title']));
            }
            if (Schema::hasTable('features')) {
                View::share('features', Feature::take(4)
                    ->inRandomOrder()
                    ->get(['id', 'title', 'image', 'created_at', 'badge']));
            }
            if (Schema::hasTable('blog')) {
                View::share('blog', Blog::where('featured', '1')
                    ->inRandomOrder()
                    ->first(['id', 'badge', 'title', 'image', 'created_at', 'created_by']));
            }
            if (Schema::hasTable('techglossy')) {
                View::share('techglossy', TechGlossy::where('featured', '1')
                    ->inRandomOrder()
                    ->first(['id', 'badge', 'title', 'image', 'created_at', 'created_by']));
            }

            Blade::directive('limit_words', function ($expression) {
                list($string, $limit) = explode(',', $expression);
                return "<?php echo implode(' ', array_slice(explode(' ', $string), 0, $limit)); ?>";
            });
        } catch (Exception $e) {
        }

        Paginator::useBootstrap();
    }
}
