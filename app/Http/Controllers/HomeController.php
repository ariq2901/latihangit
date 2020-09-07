<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function proses(Request $data)
    {
        $name = $data->nama;
        $umur = $data->umur;
        $encapsulate = $name . ' ' . $umur;
        return view('proses', ['data' => $encapsulate]);
    }
}
