<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rfq extends Model
{
    use HasFactory;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function rfqProducts()
    {
        return $this->hasMany(RfqProduct::class, 'rfq_id');
    }
    public function quotationProducts()
    {
        return $this->hasMany(QuotationProduct::class, 'rfq_id');
    }
}
