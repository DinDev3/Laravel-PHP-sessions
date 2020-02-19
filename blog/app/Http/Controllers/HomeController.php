<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function list(){
        $names = ["namal", "saman", "john"];
        return view("home.contact", ["contacts" => $names]);
    }
}
