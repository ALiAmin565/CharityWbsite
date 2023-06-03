<?php

namespace App\Http\Controllers;

use App\Models\Vision_Message;
use App\Models\Vision_Message_Right;
use Illuminate\Http\Request;
use App\Traits\ImageProcessing;

class VisionMessageRightController extends Controller
{
    use ImageProcessing;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        if ($request->hasFile('Image_right')) {
            $Image = Vision_Message_Right::find(0);

            // Delete previous image if it exists
            $this->deleteImage($Image->image);

            $Image_right = $this->saveImage($request->file('Image_right'));
            $Image->image = $Image_right;
            $Image->save();
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
