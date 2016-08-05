<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    //
    public function getProfile($username){
        $user = User::where('username', $username)->first();

        if (!$user){
            abort(404);
        }
        return view('profile.index')->with('user', $user);
}

    public function getEdit()
    {
        return view('profile.edit')
    }
}
