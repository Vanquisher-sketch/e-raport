<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function datasiswa(){
        return view('datasiswa');
    }
    public function TampilanAdmin(){
        return view('TampilanAdmin');
    }

    public function TampilGuru()
    {
        return view('TampilanGuru');
    }
    
    public function index(){
        $us = User::get();

        return view('index', compact('data'));
    }

    public function layout()
    {
        return view('layout.GuruMain');
    }
}
