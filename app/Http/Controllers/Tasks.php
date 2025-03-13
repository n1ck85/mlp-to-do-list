<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tasks extends Controller
{
    public function index()
    {
        phpinfo();
        return view('partials.tasks');
    }
}
