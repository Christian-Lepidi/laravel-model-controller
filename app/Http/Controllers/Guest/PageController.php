<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // index e la view con le card
    public function index()
    {
        return view('home');
    }
}
