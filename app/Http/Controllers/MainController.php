<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Main(Request $request)
    {
        return $request->input('id');
    }
}
