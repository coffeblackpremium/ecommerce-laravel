<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Facades\ApiFakeStore;

class StoreController extends Controller
{
    public function index()
    {
        $apiInformation = ApiFakeStore::get('/posts');
        return Inertia::render('Store/Store',
         ['apiInformation' => $apiInformation]);
    }
}
