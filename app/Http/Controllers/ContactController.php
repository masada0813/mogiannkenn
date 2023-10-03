<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getindex()
    {
        return view('attendance');
    }
    

    public function getindex()
    {
        $name = $request->only([
            'name'
            'email'
            'passwold'
        ])
        $dt = new Carbon('today', 'Asia/Tokyo');
        return view('attendance')
    }
}

