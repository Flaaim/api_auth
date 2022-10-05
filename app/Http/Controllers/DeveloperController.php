<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    
    public function __construct(){
        $this->middleware(['auth'])->except('logout');
    }

    public function index(){
        return view('developer/index');
    }
}
