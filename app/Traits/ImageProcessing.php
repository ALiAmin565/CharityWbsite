<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


trait ImageProcessing
{
    public function get_mime($mime)
    {
        if ($mime == 'image/jpeg')
            $extension = '.jpg';
        elseif ($mime == 'image/png')
            $extension = '.png';
        elseif ($mime == 'image/gif')
            $extension = '.gif';
        elseif ($mime == 'image/svg+xml')
            $extension = '.svg';
        elseif ($mime == 'image/tiff')
            $extension = '.tiff';
        elseif ($mime == 'image/webp')
            $extension = '.webp';

        return $extension;
    }

    public function saveImage($image)
    {
        $img = Image::make($image);
        $extension = $this->get_mime($img->mime());
        $str_random = Str::random(8);
        $imgpath = $str_random . time() . $extension;
        $img->save(storage_path('app/imagesfb') . '/' . $imgpath);
        return $imgpath;
    }

    public function aspect4resize($image, $width, $height)
    {
        $img = Image::make($image);
        $extension = $this->get_mime($img->mime());
        $str_random = Str::random(8);

        $img->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
        });

        $imgpath = $str_random . time() . $extension;
        $img->save(storage_path('app/imagesfp') . '/' . $imgpath);

        return $imgpath;
    }

    public function aspect4height($image, $width, $height)
    {
        $img = Image::make($image);
        $extension = $this->get_mime($img->mime());
        $str_random = Str::random(8);
        $img->resize(null, $height, function ($constraint) {
            $constraint->aspectRatio();
        });

        if ($img->width() < $width) {
            $img->resize($width, null);
        } else if ($img->width() > $width) {
            $img->crop($width, $height, 0, 0);
        }

        $imgpath = $str_random . time() . $extension;
        $img->save(storage_path('app/imagesfp') . '/' . $imgpath);
        return $imgpath;
    }

    public function saveImageAndThumbnail($Thefile, $thumb = false)
    {
        $dataX = array();

        $dataX['image'] = $this->saveImage($Thefile);

        if ($thumb) {

            $dataX['thumbnailsm'] = $this->aspect4resize($Thefile, 256, 144);
            $dataX['thumbnailmd'] = $this->aspect4resize($Thefile, 426, 240);
            $dataX['thumbnailxl'] = $this->aspect4resize($Thefile, 640, 360);
        }

        return $dataX;
    }

    public function deleteImage($filePath)
    {

        if ($filePath) {
            if (is_file(Storage::disk('imagesfb')->path($filePath))) {
                if (file_exists(Storage::disk('imagesfb')->path($filePath))) {
                    unlink(Storage::disk('imagesfb')->path($filePath));
                }
            }
        }
    }
}
