<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\History;

class HoaxDetectorController extends Controller
{
    public function result(Request $request)
    {
       $search = null;
        $data = History::orderBy('id', 'DESC')->take(5)->get();
        return view('welcome', compact('search','data'));

    }
}
