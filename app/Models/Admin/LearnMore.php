<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LearnMore extends Model
{
    use HasFactory;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    // LearnMore model
    public function successStoryOne()
    {
        return $this->belongsTo(ClientStory::class, 'success_story_one_id');
    }

    public function successStoryTwo()
    {
        return $this->belongsTo(ClientStory::class, 'success_story_two_id');
    }

    public function successStoryThree()
    {
        return $this->belongsTo(ClientStory::class, 'success_story_three_id');
    }
}
