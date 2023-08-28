<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function industryPage() {
        return $this->hasOne(IndustryPage::class);
    }
    public function products()
    {
        return $this->belongsToMany(Product::class, 'multi_industries', 'industry_id', 'product_id')->where('product_status', 'product');
    }
    // public function getBrandproducts()
    // {
    //     return $this->belongsToMany(Product::class, 'multi_industries', 'industry_id', 'product_id')
    //     ->join('products', 'products.id', '=', 'multi_industries.product_id')
    //     ->where('products.brand_id', $this->id)
    //     ->where('products.product_status', 'product');
    // }
    public function multiIndustry()
    {
        return $this->hasMany(MultiIndustry::class, 'industry_id');
    }
}
