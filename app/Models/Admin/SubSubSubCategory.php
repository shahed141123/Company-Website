<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSubSubCategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function SubSubSubCatproducts(){
        return $this->hasMany('App\Models\Admin\Product','sub_sub_sub_cat_id','id');
    }
    public static function getProductBySubSubSubCat($slug){
        // dd($slug);
        return SubSubSubCategory::with('SubSubSubCatproducts')->where('slug',$slug)->first();
        // return Product::where('cat_id',$id)->where('child_cat_id',null)->paginate(10);
    }
}
