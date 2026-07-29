<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\FileExtension;
use Intervention\Image\Laravel\Facades\Image;

trait HandleImages
{

    public function uploadImage(string $requestFileName, ?string $path = "images/avatars/"): void
    {
        $name = uniqid() . '.webp';
        $file = request()->file($requestFileName);
        $path = Storage::disk('public')->path($path . $name);
        Image::decode($file)->encodeUsingFileExtension(FileExtension::WEBP, quality: 90)->save($path);
        auth()->user()->update(['avatar' => $name]);
    }

    public function deleteImageFromStorage(string $imageToDelete, ?string $path = "images/avatars/"): void
    {
        if ($imageToDelete && Storage::disk('public')->exists($path . $imageToDelete)) {
            Storage::disk('public')->delete($path . $imageToDelete);
        }
    }

}
