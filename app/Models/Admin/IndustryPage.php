<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustryPage extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function industry()
    {
        return $this->belongsTo(Industry::class, 'industry_id');
    }

    public function rowOne()
    {
        return $this->belongsTo(Row::class, 'row_one_id');
    }

    public function rowThree()
    {
        return $this->belongsTo(Row::class, 'row_three_id');
    }

    public function rowFive()
    {
        return $this->belongsTo(Row::class, 'row_five_id');
    }

    public function solutionCardOne()
    {
        return $this->belongsTo(SolutionDetail::class, 'solution_one_id');
    }

    public function solutionCardTwo()
    {
        return $this->belongsTo(SolutionDetail::class, 'solution_two_id');
    }

    public function solutionCardThree()
    {
        return $this->belongsTo(SolutionDetail::class, 'solution_three_id');
    }

    public function solutionCardFour()
    {
        return $this->belongsTo(SolutionDetail::class, 'solution_four_id');
    }
}
