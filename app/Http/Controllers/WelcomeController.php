<?php

namespace App\Http\Controllers;
use App\Administration;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $administration = Administration::all();

        return view('welcome',compact('administration'));
    }

}
