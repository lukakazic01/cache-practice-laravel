<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewAvatarRequest;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function index() {
        return view('profile.index');
    }

    public function changeAvatar(NewAvatarRequest $request) {
        $path = $request->file('profile_image')->store('images/avatars', 'public');
        $name = basename($path);
        auth()->user()->update(['avatar' => $name]);
        return redirect()->back();
    }

}
