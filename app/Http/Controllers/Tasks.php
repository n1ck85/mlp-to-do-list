<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class Tasks extends Controller
{
    public function index()
    {
        return view('partials.tasks');
    }
}
