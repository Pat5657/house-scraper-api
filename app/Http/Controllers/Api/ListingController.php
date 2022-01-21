<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListingController extends BaseController
{
    /**
     * Submit multiple new listings.
     */
    public function submit(Request $request) {
        // TODO: Add validation to only allow scrapper to make this call
        // retrieve the listings
        $payload = $request->json()->all(); 
        // validate payload
        if (!array_key_exists('listings', $payload)) {
            return $this->sendError("Missing parameter");
        }

        DB::table('listings')->upsert($payload['listings'], ['reference']);

        return $this->sendResponse("Success");
    }
}
