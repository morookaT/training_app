<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calendar;
use Illuminate\Foundation\Console\Presets\React;

class CalendarController extends Controller
{
    public function index(Request $request)
    {
        $cal = Calendar::showCalendar($request->month, $request->year);
        $year = $request->year;
        $month = $request->month;
        // $first = $cal["f"];
        $array = [
            "cal" => $cal,
            "year" => $year,
            "month" => $month,
        ];
        return view("calendar.index", $array);
    }
}
