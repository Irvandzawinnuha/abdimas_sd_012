<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController; // Gunakan Controller sebagai BaseController

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function responseSuccess($data, $message = 'Success')
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data,
        ]);
    }

    public function responseError($message = 'Error', $code = 400)
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
        ], $code);
    }
}