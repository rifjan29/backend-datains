<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ApiController extends Controller
{
    /**
     * sendResponse function
     *
     * @param mixed $data
     */
    protected function sendResponse($data = null)
    {   
        return response()->json([
            'status' => 'success',
            'data' => $data,
        ]);
    }

    /**
     * sendErrorResponse function
     *
     * @param mixed $data
     */
    protected function sendErrorResponse($message = '', $errorCode)
    {
        return response()->json([
            'status' => 'error',
            'code' => $errorCode,
            'message' => $message
        ], 400);
    }
}
