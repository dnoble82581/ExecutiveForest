<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function landing(){
        return view('landing');
    }
    public function blog(){
        return view('blog.index');
    }

    public function shop(){
       return view('shop.index');
    }

    public function products(){
        return view('shop.products');
    }
}
