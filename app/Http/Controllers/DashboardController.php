<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        /**
         * remember we have member roles so be careful
         */
        // $this->middleware('role:admin')->only('index');
    }
    public function index()
    {
        return view('dashboard.index');
    }
}