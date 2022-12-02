<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sumNumber(Request $request)
    {
        $numb1 = $request->numb1;
        $numb2 = $request->numb2;
        $result = ($numb1 + $numb2) / 2;
        return response()->json($result, 200);
    }
}