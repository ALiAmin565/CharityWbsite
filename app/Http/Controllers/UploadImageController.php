<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ImageProcessing;

use App\Models\SliderImages;



class UploadImageController extends Controller
{
    use ImageProcessing;
    public function upload(Request $request)
    {
        if ($request->hasFile('imageOne')) {
            $Image = SliderImages::find(0);

            // Delete previous image if it exists
            $this->deleteImage($Image->imageOne);

            $imageOne = $this->saveImage($request->file('imageOne'));
            $Image->imageOne = $imageOne;
            $Image->save();
        } elseif ($request->hasFile('imageTwo')) {
            $Image = SliderImages::find(0);

            // Delete previous image if it exists
            $this->deleteImage($Image->imageTwo);

            $imageTwo = $this->saveImage($request->file('imageTwo'));
            $Image->imageTwo = $imageTwo;
            $Image->save();
        } elseif ($request->hasFile('imageThree')) {
            $Image = SliderImages::find(0);

            // Delete previous image if it exists
            $this->deleteImage($Image->imageThree);

            $imageThree = $this->saveImage($request->file('imageThree'));
            $Image->imageThree = $imageThree;
            $Image->save();
        } elseif ($request->hasFile('imageOne') && $request->hasFile('imageTwo')) {
            $Image = SliderImages::find(0);

            // Delete previous image if it exists
            $this->deleteImage($Image->imageOne);
            $this->deleteImage($Image->imageTwo);

            $imageOne = $this->saveImage($request->file('imageOne'));
            $imageTwo = $this->saveImage($request->file('imageTwo'));
            $Image->imageOne = $imageOne;
            $Image->imageTwo = $imageTwo;
            $Image->save();
        } elseif ($request->hasFile('imageTwo') && $request->hasFile('imageThree')) {
            $Image = SliderImages::find(0);

            // Delete previous image if it exists
            $this->deleteImage($Image->imageThree);
            $this->deleteImage($Image->imageTwo);

            $imageThree = $this->saveImage($request->file('imageThree'));
            $imageTwo = $this->saveImage($request->file('imageTwo'));
            $Image->imageThree = $imageThree;
            $Image->imageTwo = $imageTwo;
            $Image->save();
        } elseif ($request->hasFile('imageOne') && $request->hasFile('imageThree')) {
            $Image = SliderImages::find(0);

            // Delete previous image if it exists
            $this->deleteImage($Image->imageOne);
            $this->deleteImage($Image->imageThree);

            $imageOne = $this->saveImage($request->file('imageOne'));
            $imageThree = $this->saveImage($request->file('imageThree'));
            $Image->imageOne = $imageOne;
            $Image->imageThree = $imageThree;
            $Image->save();
        } elseif ($request->hasFile('imageOne') && $request->hasFile('imageTwo') && $request->hasFile('imageThree')) {
            $Image = SliderImages::find(0);

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
        } else {
            dd('No image selected');
        }
    }
}
