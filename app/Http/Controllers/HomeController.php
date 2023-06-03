<?php

namespace App\Http\Controllers;

use App\Models\TopNav;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $TopNav=TopNav::first();
        return view('home',compact('TopNav'));
    }
}
