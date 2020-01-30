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

        $last_month = strtotime("-1 month", mktime(0, 0, 0, $month, 1, $year));
        $last_month_y = date("Y", $last_month);
        $last_month_m = date("m", $last_month);

        $next_month = strtotime('+1 month', mktime(0, 0, 0, $month, 1, $year));
        $next_month_y = date("Y", $next_month);
        $next_month_m = date("m", $next_month);

        $array = [
            "f" => $first_week_day,
            "l" => $last_day,
            "d" => $day,
            "l_m_m" => $last_month_m,
            "l_m_y" => $last_month_y,
            "n_m_m" => $next_month_m,
            "n_m_y" => $next_month_y,
        ];
        return $array;
    }
}
