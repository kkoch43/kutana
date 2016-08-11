<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class StatusController extends Controller
{
    //

    public function postStatus(Request $request){
        $this->validate($request, [
            'status' => 'required|max:200',
        ]);

        Auth::user()->statuses()->create([
            'body' => $request->input('status'),
        ]);
        return redirect()->route('home')->with('info', 'Status Posted');


    }
}
