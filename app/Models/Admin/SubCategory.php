<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function subCatsoftwareProducts()
    {
        return $this->hasMany(Product::class, 'sub_cat_id')
            ->where('product_status', 'product')
            ->where('product_type', 'software');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'sub_cat_id')->where('product_status', 'product');
        // ->where('product_type', 'hardware');
    }

    public function SubCatproducts(){
        return $this->hasMany('App\Models\Admin\Product','sub_cat_id','id');
    }
    public static function getProductBySubCat($slug){
        // dd($slug);
        return SubCategory::with('SubCatproducts')->where('slug',$slug)->first();
        // return Product::where('cat_id',$id)->where('child_cat_id',null)->paginate(10);
    }
    public static function getSubSubcatBySubCat($slug){

        return SubSubCategory::where('sub_cat_id',$slug)->get();

    }
}
