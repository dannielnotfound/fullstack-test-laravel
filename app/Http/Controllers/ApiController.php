<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Nette\Utils\Json;

class ApiController extends Controller
{
    public function returnDateTime()
    {
        date_default_timezone_set('America/Sao_Paulo');
        $date_time = Carbon::now();
        $date =  $date_time->format('d/m/Y');
        $time = $date_time->format('H:i');
        return response()->json(["date" => $date, "time" => $time, "date-time" => $date_time]);
    }

    public function returnRequestText(Request $request){
        $text = $request->text;
        return response()->json(["text" => 'API: ' . $text]);
    }
}
