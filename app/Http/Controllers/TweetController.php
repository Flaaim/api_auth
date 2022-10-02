<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TweetController extends Controller
{
    public function index(Request $request){
        $tweets = $request->user()->tweets()->with('user')->get();
        return response()->json($tweets);
    }
}
