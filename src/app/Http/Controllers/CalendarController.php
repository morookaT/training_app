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
        // $first = $cal["f"];

        return view("calendar.index", ["cal" => $cal]);
    }
}
