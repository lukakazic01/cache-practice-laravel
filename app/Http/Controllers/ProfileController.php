<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewAvatarRequest;
use App\Services\ProfileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
