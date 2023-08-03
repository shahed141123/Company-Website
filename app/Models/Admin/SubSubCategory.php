<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function products()
    {
        return $this->hasMany(Product::class, 'sub_sub_cat_id')->where('product_status', 'product');
        // ->where('product_type', 'hardware');
    }

    public function SubSubCatproducts(){
        return $this->hasMany('App\Models\Admin\Product','sub_sub_cat_id','id');
    }
    public static function getProductBySubSubCat($slug){
        // dd($slug);
        return SubSubCategory::with('SubSubCatproducts')->where('slug',$slug)->first();
    }
}
