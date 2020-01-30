@extends('layouts.layout')
@section('title', '筋トレ予定')

@section('content')
<div class="calendar">

  <div class="cal_btn">
    <div class="last_month_btn">
      <a href="/calendar?year={{$cal["l_m_y"]}}&month={{$cal["l_m_m"]}}" >
        <p>前月</p>
      </a>
    </div>
    <div class="this_month">
      <p>{{$year}}年{{$month}}月</p>
    </div>
    <div class="next_month_btn">
      <a href="/calendar?year={{$cal["n_m_y"]}}&month={{$cal["n_m_m"]}}" >
        <p>翌月</p>
      </a>
    </div>
  </div>
  <div class="cal_main">
    <table >
      <tr>
        <th scope="col">日</th>
        <th scope="col">月</th>
        <th scope="col">火</th>
        <th scope="col">水</th>
        <th scope="col">木</th>
        <th scope="col">金</th>
        <th scope="col">土</th>
      </tr>
      @while($cal["d"]<=$cal["l"])
      <tr>
        @for($i = 0; $i<7; $i++)
          @if($cal["d"]<=0 || $cal["d"]>$cal["l"])
            <td>&nbsp;</td>
          @else
            <td>
              <a href="/calendar?year={{$year}}&month={{$month}}&day={{$cal['d']}}">
                @if($cal["d"] == $day)
                <div class="todo_day">
                  <p class="day_num">{{$cal["d"]}}</p>
                </div>
                @else
                <div class="not_day">
                  <p class="day_num">{{$cal["d"]}}</p>
                </div>
                @endif
              </a>
            </td>  
          @endif
          @php
              $cal["d"] ++;
          @endphp
        @endfor
      </tr>
      @endwhile
    </table>  
  </div>

</div>
  

@endsection