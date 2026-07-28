<?php

namespace App\Services;

use App\Http\Requests\NewAvatarRequest;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProfileService
{

    public function __construct()
    {
        //
    }

    public function changeAvatar(NewAvatarRequest $request) {
        $avatar = auth()->user()->avatar;
        if ($avatar && Storage::disk('public')->exists('images/avatars/'.$avatar)) {
            Storage::disk('public')->delete('images/avatars/'.$avatar);
        }
        $path = $request->file('profile_image')->store('images/avatars', 'public');
        $name = basename($path);
        auth()->user()->update(['avatar' => $name]);
    }
}
