<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function games(){
        return view('pages/games');
    }

    public function home(){
        return view('pages/home');
    }

    public function teams(){
        return view('pages/teams');
    }
}
