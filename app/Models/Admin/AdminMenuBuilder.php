<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminMenuBuilder extends Model
{
    use HasFactory;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public static function getParentMenus($id){
        // dd($slug);
        return AdminMenuBuilder::where('module_id',$id)->get();
    }
    public static function getSubMenus($id){
        // dd($slug);
        return AdminMenuBuilder::where('parent_id',$id)->get();
    }
}
