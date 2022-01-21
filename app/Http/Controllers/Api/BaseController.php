<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * Returns a successful response
     */
    public function sendResponse($response, $status = 200) {
        return response()->json($response, $status);
    }

    /**
     * Returns an error response
     */
    public function sendError($error, $detail = [], $status = 400) {
        $response = [
            'error' => $error
        ];

        if (!empty($detail)) {
            $response['detail'] = $detail;
        }

        return response()->json($response, $status);
    }
}
