<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ChartController extends Controller
{
    public function index()
    {
        return Inertia::render('Store/ChartStore', 
        []);
    }
}