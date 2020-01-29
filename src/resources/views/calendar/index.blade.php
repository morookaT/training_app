@extends('layouts.layout')
@section('title', '筋トレ予定')

@section('content')
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

@endsection