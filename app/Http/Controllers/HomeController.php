<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use App\Models\TopNav;
use App\Models\SliderImages;
use Illuminate\Http\Request;
use App\Models\Vision_Message_Left;
use App\Models\Vision_Message_Right;

class HomeController extends Controller
{
    public function index()
    {
        $TopNav=TopNav::first();
        $SliderImages=SliderImages::first();
        $sectionRight=Vision_Message_Right::first();
        $sectionLeft=Vision_Message_Left::first();
        $footer=Footer::first();
        return view('home',compact('TopNav','SliderImages','sectionRight','sectionLeft','footer'));
    }
    public function payment()
    {
        $TopNav=TopNav::first();
        return view('payment',compact('TopNav'));
    }
    public function bank()
    {
        $TopNav=TopNav::first();
        return view('bank',compact('TopNav'));
    }
    public function soon()
    {
        $TopNav=TopNav::first();
        return view('soon',compact('TopNav'));
    }
    public function article()
    {
        $SliderImages=SliderImages::first();
        $TopNav=TopNav::first();
        return view('article',compact('TopNav','SliderImages'));
    }
    public function blogs()
    {
        $SliderImages=SliderImages::first();
        $TopNav=TopNav::first();
        return view('blogs',compact('TopNav','SliderImages'));
    }
}
