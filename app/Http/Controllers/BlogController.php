<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Footer;
use App\Models\TopNav;
use App\Models\SliderImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Traits\ImageProcessing;

class BlogController extends Controller
{
    use ImageProcessing;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs=Blog::get();
        return view('blog.view',compact('blogs'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog=new Blog();
        if ($request->hasFile('image')) {

            // Delete previous image if it exists
            $this->deleteImage($blog->image);
            $Image_logo = $this->saveImage($request->file('image'));
            $blog->image = $Image_logo;
        }
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->save();
        Session::flash('create', 'Data created successfully');
        return redirect()->route('blog.index');
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
        $blog=Blog::find($id);
        return view('blog.update',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = blog::find($id);
        if ($request->hasFile('image')) {

            // Delete previous image if it exists
            $this->deleteImage($blog->image);
            $Image_logo = $this->saveImage($request->file('image'));
            $blog->image = $Image_logo;
            $blog->save();
        }
        $blog->title = $request->input('title');
        $blog->description = $request->input('description');
        $blog->save();
        Session::flash('update', 'Data updated successfully');
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog=Blog::find($id);
        $this->deleteImage($blog->image);
        $blog->delete();
        Session::flash('delete', 'Data deleted successfully');
        return redirect()->route('blog.index');
    }
}
