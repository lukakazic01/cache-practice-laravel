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
        dd($request->validated());
    }

}
