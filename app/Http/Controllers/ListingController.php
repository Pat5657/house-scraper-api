<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function index() {
        $listings = Listing::paginate(7);

        return view('listings.index', [
            'listings'=>$listings
        ]);
    }
}
