<?php

namespace App\Http\Controllers\Api;

use App\Models\Target;
use Illuminate\Http\Request;

class TargetController extends BaseController
{
    /**
     * Retrieve all targets
     */
    public function index() {
        return $this->sendResponse(Target::all());
    }

    public function store() {
        // Target::create([
        //     'url'=>'https://www.openrent.co.uk/properties-to-rent/wembley-greater-london?term=Wembley,%20Greater%20London&prices_max=2700&bedrooms_min=3&bedrooms_max=4&hasParking=true'
        // ]);

        return $this->sendResponse('store');
    }
}
