<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function story1(){
        return $this->hasMany(Client::class,'id','story1_id');
    }
    public function story2(){
        return $this->hasMany(Client::class,'id','story2_id');
    }
    public function story3(){
        return $this->hasMany(Client::class,'id','story3_id');
    }
    public function story4(){
        return $this->hasMany(Client::class,'id','story4_id');
    }
    public function story5(){
        return $this->hasMany(Client::class,'id','story5_id');
    }

    public function solution1(){
        return $this->hasMany(Blog::class,'id','solution1_id');
    }
    public function solution2(){
        return $this->hasMany(Blog::class,'id','solution2_id');
    }
    public function solution3(){
        return $this->hasMany(Blog::class,'id','solution3_id');
    }
    public function solution4(){
        return $this->hasMany(Blog::class,'id','solution4_id');
    }


    public function success1(){
        return $this->hasMany(Success::class,'id','success1_id');
    }
    public function success2(){
        return $this->hasMany(Success::class,'id','success2_id');
    }
    public function success3(){
        return $this->hasMany(Success::class,'id','success3_id');
    }
}
