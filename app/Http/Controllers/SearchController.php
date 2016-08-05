<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    //
    public function getResults(Request $request){

        $query = $request->input('query');

        if (!$query) {
            return redirect()-route('home');
        }

        $users = User::where(DB::raw("CONCAT(first_name, ' ', last_name)"), 'LIKE', "%{$query}%")
            ->orWhere('username', 'LIKE', "%{$query}%")
            ->get();


        return view('search.results')->with('users', $users);
    }
}
