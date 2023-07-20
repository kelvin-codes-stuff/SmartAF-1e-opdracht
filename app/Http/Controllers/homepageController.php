<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\fileHandle;

class homepageController extends Controller
{
    public function home()
    {
        return view('home', ['data' => fileHandle::all()]);
    }
}
