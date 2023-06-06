<?php

namespace App\Http\Controllers\Home;

use App\Models\Footer;
use App\Models\TopNav;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Traits\ImageProcessing;
use Illuminate\Support\Facades\Session;

class TopNavController extends Controller
{
    use ImageProcessing;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $topNav = TopNav::first();
        return view('topNav.view', compact('topNav'));
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
        $topNav = TopNav::find($id);
        return view('topNav.update', compact('topNav'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $topNav = Topnav::find($id);
        if ($request->hasFile('Image_logo')) {
            $Image = Footer::find(0);
            // Delete previous image if it exists
            $this->deleteImage($Image->image);
            $Image_logo = $this->saveImage($request->file('Image_logo'));
            $Image->image = $Image_logo;
            $Image->save();
        }
        $topNav->location = $request->input('Location');
        $topNav->email = $request->input('Email');
        $topNav->facebook = $request->input('facebook');
        $topNav->youtube = $request->input('youtube');
        $topNav->twitter = $request->input('twitter');
        $topNav->instagram = $request->input('instagram');
        $topNav->whatsapp = $request->input('whatsapp');
        $topNav->save();
        Session::flash('update', 'Data updated successfully');
        return redirect()->route('topnav.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
