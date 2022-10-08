<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TweetRequest;

class TweetController extends Controller
{
    public function index(Request $request){
        $tweets = $request->user()->tweets()->latestFirst()->with('user')->get();
        return response()->json($tweets);
    }
    
    public function store(Request $request){
        
        
        $validated = $request->validate([
            'body' => 'required',
        ]);
        
        $tweet = $request->user()->tweets()->create([
            'body' => $request->body,
        ])->load('user');
        return $tweet;
    }
}
