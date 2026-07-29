<?php

namespace App\Services;

use App\Http\Requests\NewAvatarRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Exceptions\InvalidArgumentException;
use Intervention\Image\FileExtension;
use Intervention\Image\Laravel\Facades\Image;

class ProfileService
{

    public function __construct()
    {
        //
    }

    /**
     * @throws InvalidArgumentException
     */
    public function changeAvatar(NewAvatarRequest $request) {
        $avatar = auth()->user()->avatar;
        if ($avatar && Storage::disk('public')->exists('images/avatars/'.$avatar)) {
            Storage::disk('public')->delete('images/avatars/'.$avatar);
        }
        $name = uniqid() . '.webp';
        $file = $request->file('profile_image');
        $path = Storage::disk('public')->path('images/avatars/' . $name);
        Image::decode($file)->encodeUsingFileExtension(FileExtension::WEBP, quality: 90)->save($path);
        auth()->user()->update(['avatar' => $name]);
    }
}
