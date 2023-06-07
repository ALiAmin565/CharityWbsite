<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Footer;
use App\Models\TopNav;
use App\Models\SectionLeft;
use App\Models\SectionRight;
use App\Models\SliderImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()
    {
        $TopNav=TopNav::first();
        $SliderImages=SliderImages::first();
        $sectionRight=SectionRight::first();
        $sectionLeft=SectionLeft::first();
        $footer=Footer::first();
        $lastSixRecords = DB::table('blogs')
                    ->latest()
                    ->take(6)
                    ->get();
        return view('home',compact('TopNav','SliderImages','sectionRight','sectionLeft','footer','lastSixRecords'));
    }
    public function payment()
    {
        $TopNav=TopNav::first();
        $footer=Footer::first();
        return view('payment',compact('TopNav','footer'));
    }
    public function bank()
    {
        $TopNav=TopNav::first();
        $footer=Footer::first();
        return view('bank',compact('TopNav','footer'));
    }
    public function soon()
    {
        $TopNav=TopNav::first();
        $footer=Footer::first();
        return view('soon',compact('TopNav','footer'));
    }
    public function article()
    {
        $SliderImages=SliderImages::first();
        $TopNav=TopNav::first();
        $footer=Footer::first();
        return view('article',compact('TopNav','SliderImages','footer'));
    }
    public function blogs()
    {
        $blogs=Blog::get();
        $TopNav=TopNav::first();
        $footer=Footer::first();
        return view('blogs',compact('blogs','TopNav','footer'));
    }
    public function singleBlog($id)
    {
        $blog=Blog::find($id);
        $TopNav=TopNav::first();
        $footer=Footer::first();
        return view('singleblog',compact('blog','TopNav','footer'));
    }
}
