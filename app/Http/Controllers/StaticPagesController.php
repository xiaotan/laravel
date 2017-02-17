<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function help(){
        return view('help');
    }

    public function about(){
        return view('about');
    }
}
