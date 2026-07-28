<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewAvatarRequest;
use App\Services\ProfileService;
use Intervention\Image\Interfaces\ImageManagerInterface;

class ProfileController extends Controller
{

    public function index() {
        return view('profile.index');
    }

    public function changeAvatar(NewAvatarRequest $request, ProfileService $profileService, ImageManagerInterface $imageManager) {
        $profileService->changeAvatar($request, $imageManager);
        return redirect()->back();
    }

}
