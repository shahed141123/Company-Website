<?php

namespace App\Providers;

use App\Models\Admin\Brand;
use App\Models\Admin\Product;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
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
        View::share('productCount', Product::where('product_status', 'product')->count());
        View::share('brandCount', Brand::count());
        Blade::directive('limit_words', function ($expression) {
            list($string, $limit) = explode(',', $expression);
            return "<?php echo implode(' ', array_slice(explode(' ', $string), 0, $limit)); ?>";
        });
        Paginator::useBootstrap();
    }
}
