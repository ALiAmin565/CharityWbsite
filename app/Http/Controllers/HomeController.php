<?php

namespace App\Http\Controllers;

use App\Models\TopNav;
use App\Models\SliderImages;
use App\Models\Vision_Message_Right;
use App\Models\Vision_Message_Left;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $TopNav=TopNav::first();
        $SliderImages=SliderImages::first();
        $sectionRight=Vision_Message_Right::first();
        $sectionLeft=Vision_Message_Left::first();
        return view('home',compact('TopNav','SliderImages','sectionRight','sectionLeft'));
    }
}
