<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        return view("home");
        
    }
    function help(Request $request){
        return view("admin.page.help");
    }
}