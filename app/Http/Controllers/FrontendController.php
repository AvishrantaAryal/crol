<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Background;
use App\Carousel;
use App\Gallery;
use App\Seo;

class FrontendController extends Controller
{
    public function home()
    {
        $seo = Seo::where('name','Home')->get()->first();
    	$carousel = Carousel::where('status','active')->get();
    	$about = About::get()->first();
    	$back = Background::get()->first();
    	return view('frontend.home.home',compact('carousel','about','back','seo'));

    }

    public function about()
    {
    	$about = About::get()->first();
        $seo = Seo::where('name','About')->get()->first();
    	return view('frontend.about.about',compact('about','seo'));
    }

    public function gallery()
    {
    $gallery = Gallery::where('status','active')->get();
    $seo = Seo::where('name','Gallery')->get()->first();
    return view('frontend.gallery.gallery',compact('gallery','seo'));
    }

    public function contact()
    {
        $seo = Seo::where('name','Contact')->get()->first();
    	return view('frontend.contact.contact',compact('seo'));

    }
}
