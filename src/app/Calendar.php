<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    public static function showCalendar($m, $y)
    {
        $year = $y;
        $month = $m;
        if ($year == null) {
            $year = date("Y");
            $month = date("m");
        }

        // w=曜日 t=指定した月の日数 ０が日曜
        $first_week_day = date("w", mktime(0, 0, 0, $month, 1, $year));
        $last_day = date("t", mktime(0, 0, 0, $month, 1, $year));
        $day = 1 - $first_week_day;
        $array = ["f" => $first_week_day, "l" => $last_day, "d" => $day];
        return $array;
    }
}
