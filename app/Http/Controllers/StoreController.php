<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Facades\ApiFakeStore;

class StoreController extends Controller
{
    public function index()
    {
        $apiInformation = ApiFakeStore::get('/products');

        return Inertia::render('Store/Store',
         ['apiInformation' => $apiInformation->json()]);
    }

    public function show()
    {
        return Inertia::render('Store/ChartStore');
    }
}
