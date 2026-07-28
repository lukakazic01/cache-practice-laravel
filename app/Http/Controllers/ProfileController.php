<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewAvatarRequest;
use App\Services\ProfileService;

class ProfileController extends Controller
{

    public function index() {
        return view('profile.index');
    }

    public function changeAvatar(NewAvatarRequest $request, ProfileService $profileService) {
        $profileService->changeAvatar($request);
        return redirect()->back();
    }

}
