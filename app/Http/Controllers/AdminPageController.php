<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPageController extends Controller
{
    function dashboardAdmin()
    {
        return view('layouts.master');
    }
}