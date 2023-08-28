<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentPdf extends Model
{
    use HasFactory;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function getBrandName()
    {
        return Brand::where('id', $this->brand_id)->value('title');
    }
    public function getProductName()
    {
        return Product::where('id', $this->product_id)->value('name');
    }
    public function getIndustryName()
    {
        return Industry::where('id', $this->industry_id)->value('title');
    }
    public function getSolutionName()
    {
        return Solution::where('id', $this->solution_id)->value('name');
    }
}
