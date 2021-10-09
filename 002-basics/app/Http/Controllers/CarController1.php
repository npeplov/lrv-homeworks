<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController1 extends Controller
{
    public function index()
    {
        return view('form', ['name' => $name ?? 'Компания']);
    }
}
