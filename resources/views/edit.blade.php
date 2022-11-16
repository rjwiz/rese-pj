@extends('layouts.layout')

@section('pageCss')
<link rel="stylesheet" href="/css/edit.css" />
@endsection
<div class="wrap">
  @include('layouts.header')
</div>
@section('contents')
<div class="wrap__inner">
  <div class="detail__all">
    <div class="shop__detail">
      <img src="{{$reservation->shop->img_url}}">
      <div class="shop__info">
        <p class="shop__area">#{{$reservation->shop->area->name}}</p>
        <p class="shop__category">#{{$reservation->shop->category->name}}</p>
      </div>
      <div class="shop__description">
        <p>{{$reservation->shop->description}}</p>
      </div>
    </div>
    <div class="reservation">
      <div class="reserve__table">
        <p class="reserve__ttl">現在のご予約</p>
        <table>
          <tr>
            <th>Shop</th>
            <td>{{$reservation->shop->name}}</td>
          </tr>
          <tr>
            <th>Date</th>
            <td>{{\Carbon\Carbon::parse($reservation->start_at)->format('Y-m-d')}}</td>
          </tr>
          <tr>
            <th>Time</th>
            <td>{{\Carbon\Carbon::parse($reservation->start_at)->format('H:i')}}</td>
          </tr>
          <tr>
            <th>Number</th>
            <td>{{$reservation->num_of_users}}人</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="shop__reserve">
    <div class="shop__reserve-inner">
      <div class="reserve__ttl">
        <p>予約</p>
      </div>
      <div>
        @if ($errors->any())
        <div class="errors">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form method="post" action="{{ route('update') }}">
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
          <div>
            <select class="shop__reserve-select" id="input-num" name="num_of_users">
              @foreach(config('number') as $number_id => $number)
              <option value="{{$number}}">{{$number_id}}</option>
              @endforeach
            </select>
          </div>
          @auth
          <input type="hidden" name="user_id" value="{{$user->id}}">
          @endauth
          <input type="hidden" name="shop_id" value="{{$reservation->shop_id}}">
          <input type="hidden" name="reservation_id" value="{{$reservation->id}}">
      </div>
      <div class="reserve__table">
        <table>
          <tr>
            <th>Shop</th>
            <td>{{$reservation->shop->name}}</td>
          </tr>
          <tr>
            <th>Date</th>
            <td><span id="output-date"></span></td>
          </tr>
          <tr>
            <th>Time</th>
            <td><span id="output-time"></span></td>
          </tr>
          <tr>
            <th>Number</th>
            <td><span id="output-num"></span></td>
          </tr>
        </table>
      </div>
    </div>
    <input type="submit" value="予約" class="reserve__btn-block">
    </form>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  @section('pageJs')
  <script src="{{ mix('js/detail.js') }}"></script>
  @endsection
  @endsection