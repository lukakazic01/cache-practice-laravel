<?php

namespace App\Services;

use App\Http\Requests\NewAvatarRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Exceptions\InvalidArgumentException;
use Intervention\Image\FileExtension;
use Intervention\Image\Interfaces\ImageManagerInterface;

class ProfileService
{

    public function __construct()
    {
        //
    }

    /**
     * @throws InvalidArgumentException
     */
    public function changeAvatar(NewAvatarRequest $request, ImageManagerInterface $imageManager) {
//        $avatar = auth()->user()->avatar;
//        if ($avatar && Storage::disk('public')->exists('images/avatars/'.$avatar)) {
//            Storage::disk('public')->delete('images/avatars/'.$avatar);
//        }
//        $path = $request->file('profile_image')->store('images/avatars', 'public');
//        $name = basename($path);
        $name = uniqid() . '.webp';
        $file = $request->file('profile_image');
        $path = Storage::disk('public')->path('images/avatars/' . $name);
        $imageManager->decode($file)->encodeUsingFileExtension(FileExtension::WEBP, quality: 90)->save($path);
        auth()->user()->update(['avatar' => $name]);
    }
}
