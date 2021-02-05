<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class superuserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }




    public function index()
    {
        return view('v_superuser');
    }
}
