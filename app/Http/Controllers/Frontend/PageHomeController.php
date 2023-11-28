<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Category;
use App\Models\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PageHomeController extends Controller
{
    public function anasayfa(){
        $slider = Slider::where('status', '1')->first();
        $categoies = Category::where('status', '1')->get();
        $about = About::where('id','1')->first();

        return view('frontend.pages.index', compact('slider','categoies','about'));
    }
}
