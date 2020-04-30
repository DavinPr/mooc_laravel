<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Source;

class AboutController extends Controller
{
    public function index(){

        $about = Source::all();
        return view('about', compact('about'));

    }
}
