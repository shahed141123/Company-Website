<?php

namespace App\Models\Admin;

use App\Models\Admin\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class, 'cat_id')
            ->where('product_status', 'product');
    }

    public function subCathardwareProducts()
    {
        return $this->products()->where('product_type', 'hardware')->inRandomOrder(11);
    }

    public function Catproducts()
    {
        return $this->products();
    }


    public static function getProductByCat($slug)
    {
        return self::with('Catproducts')->where('slug', $slug)->first();
    }

    public function Softwareproducts()
    {
        return $this->products()->where('product_type', 'software')->paginate(10);
    }

    public function Hardwareproducts()
    {
        return $this->products()->where('product_type', 'hardware')->paginate(10);
    }


    public static function getSubcatByCat($slug)
    {
        return SubCategory::where('cat_id', $slug)->get();
    }
}
