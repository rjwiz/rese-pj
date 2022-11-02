@extends('layouts.layout')

@section('pageCss')
<link rel="stylesheet" href="/css/detail.css" />
@endsection
@include('layouts.header')
@section('contents')
<div class="shop__reserve">
  <div class="shop__reserve-inner">
    <div class="reserve__ttl">
      <p>予約</p>
    </div>
    <div>
      <form method="post" action="{{ route('testreservation') }}">
        @csrf
        <div class="shop__reserve-date">
          <input type="date" id="input-date" name="date">
        </div>
        <div class="shop__reserve-time">
          <select class="shop__reserve-select" id="input-time" name="time">
            @foreach(config('time') as $time_id => $time)
            <option value="{{$time}}">{{$time}}</option>
            @endforeach
          </select>
        </div>
        <select class="shop__reserve-select" id="input-num" name="num_of_users">
          @foreach(config('number') as $number_id => $number)
          <option value="{{$number}}">{{$number}}</option>
          @endforeach
        </select>
    </div>
    <div class="reserve__table">
    </div>
  </div>
  <div>
    <input type="submit" value="予約" class="reserve__btn-block">
  </div>
  </form>
</div>
@endsection