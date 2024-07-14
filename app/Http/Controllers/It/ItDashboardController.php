<?php

namespace App\Http\Controllers\It;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ItDashboardController extends Controller
{
    public function index()
    {
        return view('it.dashboard');
    }
}
