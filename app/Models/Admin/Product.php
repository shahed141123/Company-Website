<?php

namespace App\Models\Admin;

use App\Models\Admin\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function getProductByDeals(){
    //     return $this->hasMany('App\Models\Admin\Product','deals'!= NULL);
    // }
    // public static function getProductByRefurbished(){
    //     // dd($slug);
    //     return $this->hasMany('App\Models\Admin\Product','deals'!= NULL);
    // }
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_cat_id');
    }
    public function subsubCategory()
    {
        return $this->belongsTo(SubSubCategory::class, 'sub_sub_cat_id');
    }
    public function solutions()
    {
        return $this->belongsToMany(SolutionDetail::class, 'multi_solutions', 'product_id', 'solution_id');
    }

    public function industries()
    {
        return $this->belongsToMany(Industry::class, 'multi_industries', 'product_id', 'industry_id');
    }
}
