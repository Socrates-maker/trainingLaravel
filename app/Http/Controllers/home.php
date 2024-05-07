<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function index() : String {
        return "Hello";
    }

    public function welcome() {
        $array = ["foo", "bar", "hello", "world"];
        // var_dump($array);
        return view('welcome',['user' => $array]);
    }

    public function getValue() : Int {
        return 10;
    }
}
