<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewAvatarRequest;

class ProfileController extends Controller
{

    public function index() {
        return view('profile.index');
    }

    public function changeAvatar(NewAvatarRequest $request) {
        $this->deleteImageFromStorage(auth()->user()->avatar);
        $name = $this->uploadImage('profile_image');
        auth()->user()->update(['avatar' => $name]);
        return redirect()->back();
    }

}
