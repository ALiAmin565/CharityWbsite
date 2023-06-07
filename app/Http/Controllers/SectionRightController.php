<?php

namespace App\Http\Controllers;

use App\Models\SectionRight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Traits\ImageProcessing;

class SectionRightController extends Controller
{
    use ImageProcessing;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $section=SectionRight::first();
        return view('sectionright.view',compact('section'));
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
        $section=SectionRight::find($id);
        return view('sectionright.update',compact('section'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request,$id);
        // //
        $section=SectionRight::find($id);
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
        return redirect()->route('sectionright.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
