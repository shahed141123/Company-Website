<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\ClientStory;
use Illuminate\Http\Request;

class BlogFilterController extends Controller
{
    public function Story(){


        $storys = ClientStory::query();




         if(!empty($_GET['sortBy'])){
            if($_GET['sortBy']=='titleASC'){
                $storys = $storys->orderBy('name','ASC');
            }
            if($_GET['sortBy']=='priceASC'){
                $storys = $storys->orderBy('price','ASC');
            }
            if($_GET['sortBy']=='titleDESC'){
                $storys = $storys->orderBy('name','DESC');
            }
            if($_GET['sortBy']=='priceDESC'){
                $storys = $storys->orderBy('price','DESC');
            }
        }


        // Price Range

        //dd($_GET['price']);
        if(!empty($_GET['price'])){
            $price = explode('-',$_GET['price']);
            $storys = $storys->whereBetween('price',$price);
         }

        if(!empty($_GET['show'])){
            $storys=$storys->paginate($_GET['show']);
        }
        else{
            $storys=$storys->paginate(10);
        }

      

      return view('frontend.pages.story.all_story',compact('products','categories','newProduct','brands'));

    } // End Method


    public function StoryFilter(Request $request){

        $data = $request->all();

        /// Filter For Category

        $showURL="";
            if(!empty($data['show'])){
                $showURL .='&show='.$data['show'];
            }

            $sortByURL='';
            if(!empty($data['sortBy'])){
                $sortByURL .='&sortBy='.$data['sortBy'];
            }

        $catUrl = "";
        if (!empty($data['category'])) {
            foreach($data['category'] as $category){
                if (empty($catUrl)) {
                    $catUrl .= '&category='.$category;
                }else{
                    $catUrl .= ','.$category;
                }
            }
        }


        /// Filter For Brand

        $brandUrl = "";
        if (!empty($data['brand'])) {
            foreach($data['brand'] as $brand){
                if (empty($brandUrl)) {
                    $brandUrl .= '&brand='.$brand;
                }else{
                    $brandUrl .= ','.$brand;
                }
            }
        }

        //keyword
        $keywordURL='';
            if(!empty($data['keyword'])){
                $keywordURL .='&keyword='.$data['keyword'];
            }

        /// Filter For Price Range

        $priceRangeUrl = "";
        if (!empty($data['price_range'])) {
           $priceRangeUrl .= '&price='.$data['price_range'];
        }



        return redirect()->route('all.story',$showURL.$sortByURL.$catUrl.$brandUrl.$priceRangeUrl.$keywordURL);

    }// End Method

}
