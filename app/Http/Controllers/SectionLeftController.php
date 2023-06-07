<?php

namespace App\Http\Controllers;

use App\Models\SectionLeft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Traits\ImageProcessing;

class SectionLeftController extends Controller
{
    use ImageProcessing;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section=SectionLeft::first();
        return view('sectionleft.view',compact('section'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $section=SectionLeft::find($id);
        return view('sectionleft.update',compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request,$id);
        // //
        $section=SectionLeft::find($id);
        if ($request->hasFile('image')) {

            // Delete previous image if it exists
            $this->deleteImage($section->image);
            $Image_logo = $this->saveImage($request->file('image'));
            $section->image = $Image_logo;
            $section->save();
        }
        $section->titleOne = $request->input('titleOne');
        $section->titleTwo = $request->input('titleTwo');
        $section->spanOne = $request->input('spanOne');
        $section->spanTwo = $request->input('spanTwo');
        $section->textOne = $request->input('textOne');
        $section->textTwo = $request->input('textTwo');

        $section->save();
        Session::flash('update', 'Data updated successfully');
        return redirect()->route('sectionleft.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
