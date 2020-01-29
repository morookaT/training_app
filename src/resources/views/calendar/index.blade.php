@extends('layouts.layout')
@section('title', '筋トレ予定')

@section('content')
  <div>
    <div>
      <a href="/calendar?year={{$cal["l_m_y"]}}&month={{$cal["l_m_m"]}}" class="btn btn-primary">
        前月
      </a>
    </div>
    <div>
      {{$year}}年{{$month}}月
    </div>
    <div>
      <a href="/calendar?year={{$cal["n_m_y"]}}&month={{$cal["n_m_m"]}}" class="btn btn-primary">
        翌月
      </a>
    </div>
  </div>
  <div>
    <table>
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
            <td>{{$cal["d"]}}</td>
          @endif
          @php
              $cal["d"] ++;
          @endphp
        @endfor
      </tr>
      @endwhile
    </table>  
  </div>

@endsection