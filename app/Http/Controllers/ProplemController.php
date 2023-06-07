<?php

namespace App\Http\Controllers;

use App\Models\Proplem;
use Illuminate\Http\Request;

class ProplemController extends Controller
{
    public function index(Request $request)
{

        $preo=Proplem::create($request->all());
         return redirect()->route('home')->with('تمت الاضافه بنجاح شكرا لك ');

}
public function get()
{
    $preo=Proplem::get();
    return view('proplem.index',compact('preo'));

}

public function show($id)
{
    $preo=Proplem::find($id);
    return view('proplem.show',compact('preo'));

}
}
