<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ImageProcessing;

use App\Models\SliderImages;



class UploadImageController extends Controller
{
    use ImageProcessing;
    public function index()
    {
        $SliderImages = SliderImages::first();
        return view('slider.view', compact('SliderImages'));
    }
    public function edit($id)
    {
        $SliderImages = SliderImages::find($id);
        return view('slider.update', compact('SliderImages'));
    }
    public function update(Request $request,$id)
    {
        // dd($request->imageTwo,$id);
        if ($request->hasFile('imageOne') && $request->hasFile('imageTwo') && $request->hasFile('imageThree')) {
            $Image = SliderImages::find($id);

            // Delete previous image if it exists
            $this->deleteImage($Image->imageOne);
            $this->deleteImage($Image->imageTwo);
            $this->deleteImage($Image->imageThree);

            $imageOne = $this->saveImage($request->file('imageOne'));
            $imageTwo = $this->saveImage($request->file('imageTwo'));
            $imageThree = $this->saveImage($request->file('imageThree'));
            $Image->imageOne = $imageOne;
            $Image->imageTwo = $imageTwo;
            $Image->imageThree = $imageThree;
            $Image->save();
        } elseif ($request->hasFile('imageOne') && $request->hasFile('imageTwo')) {
            $Image = SliderImages::find($id);

            // Delete previous image if it exists
            $this->deleteImage($Image->imageOne);
            $this->deleteImage($Image->imageTwo);

            $imageOne = $this->saveImage($request->file('imageOne'));
            $imageTwo = $this->saveImage($request->file('imageTwo'));
            $Image->imageOne = $imageOne;
            $Image->imageTwo = $imageTwo;
            $Image->save();
        } elseif ($request->hasFile('imageTwo') && $request->hasFile('imageThree')) {
            $Image = SliderImages::find($id);

            // Delete previous image if it exists
            $this->deleteImage($Image->imageThree);
            $this->deleteImage($Image->imageTwo);

            $imageThree = $this->saveImage($request->file('imageThree'));
            $imageTwo = $this->saveImage($request->file('imageTwo'));
            $Image->imageThree = $imageThree;
            $Image->imageTwo = $imageTwo;
            $Image->save();
        } elseif ($request->hasFile('imageOne') && $request->hasFile('imageThree')) {
            $Image = SliderImages::find($id);

            // Delete previous image if it exists
            $this->deleteImage($Image->imageOne);
            $this->deleteImage($Image->imageThree);

            $imageOne = $this->saveImage($request->file('imageOne'));
            $imageThree = $this->saveImage($request->file('imageThree'));
            $Image->imageOne = $imageOne;
            $Image->imageThree = $imageThree;
            $Image->save();
        } elseif ($request->hasFile('imageOne')) {
            $Image = SliderImages::find($id);

            // Delete previous image if it exists
            $this->deleteImage($Image->imageOne);

            $imageOne = $this->saveImage($request->file('imageOne'));
            $Image->imageOne = $imageOne;
            $Image->save();
        } elseif ($request->hasFile('imageTwo')) {
            $Image = SliderImages::find($id);

            // Delete previous image if it exists
            $this->deleteImage($Image->imageTwo);

            $imageTwo = $this->saveImage($request->file('imageTwo'));
            $Image->imageTwo = $imageTwo;
            $Image->save();
        } elseif ($request->hasFile('imageThree')) {
            $Image = SliderImages::find($id);

            // Delete previous image if it exists
            $this->deleteImage($Image->imageThree);

            $imageThree = $this->saveImage($request->file('imageThree'));
            $Image->imageThree = $imageThree;
            $Image->save();
        } else {
            dd('No image selected');
        }
        return redirect()->route('slider.view');
    }
}
