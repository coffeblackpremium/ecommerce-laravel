<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Facades\ApiFakeStore;

class StoreController extends Controller
{
    public function index()
    {

        
        return Inertia::render('Store/StoreTeste');
    }
}
