<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CobaDashboardController extends Controller
{
    public function showDashboard()
    {
        return view ('cobadashboard');
    }
}
