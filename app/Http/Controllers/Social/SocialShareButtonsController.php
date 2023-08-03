<?php

namespace App\Http\Controllers\Social;

use Share;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SocialShareButtonsController extends Controller
{
    public function ShareWidget()
    {
        $shareComponent = Share::page(
            'https://www.positronx.io/create-autocomplete-search-in-laravel-with-typeahead-js/',
            'Your share text comes here',
        )
        ->facebook()
        ->twitter()
        ->linkedin()
        ->telegram()
        ->whatsapp()
        ->reddit();

        return view('posts', compact('shareComponent'));
    }
}
