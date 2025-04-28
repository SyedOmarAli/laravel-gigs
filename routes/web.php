<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listing;

// All Listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',

        'listings' => Listing::all()
    ]);
});

// Single Listings
// Route::get('/listings/{id}', function ($id) {
//     $listing = Listing::find($id);

//     if ($listing) {
//         return view('listing', [
//             'listing' => Listing::find($id)
//         ]);
//     } else {
//         abort('404');
//     }
// });

Route::get('/listings/{listing}', function (Listing $listing) {

    
        return view('listing', [
            'listing' => $listing
        ]);
    
});