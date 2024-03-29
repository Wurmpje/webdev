<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// De view controller staat in verbinding met de route en de view bestanden
class ViewController extends Controller
{
    public function app() {
        return view('app');
    }

    public function about(){
        return view('about');
    }

    public function registreren(){
        return view('registreren');
    }

    public function login(){
        return view('login');
    }
}
