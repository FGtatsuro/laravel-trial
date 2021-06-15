<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function say(Request $request, string $name = null) {
        return view('hello', ['name' => $name]);
    }
}
