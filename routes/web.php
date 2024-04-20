<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Job Listings',
        'listings' => Listing::all()
    ]);
});

Route::get('/listings/{id}', function (Listing $id){
    return view('listing', [
        'listing' => $id
    ]);
});
