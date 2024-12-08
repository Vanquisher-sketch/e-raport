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
    public function index(){
        $data = User::get();

        return view('index', compact('data'));
    }
}
