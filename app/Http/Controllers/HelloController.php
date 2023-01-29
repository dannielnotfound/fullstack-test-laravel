<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello(Request $request)
    {
        return response()->json([
            'mensagem' => 'Hello, world! Laravel OK'
        ]);
    }
}
