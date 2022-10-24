@extends('layouts.layout')

@section('pageCss')
<link rel="stylesheet" href="/css/detail.css" />
@endsection
<div class="wrap">
  <div>
    @include('layouts.header')
    @section('contents')
    <div class="detail__ttl">
      <div class="detail__ttl-inner">
        <button onclick="location.href=' /'" class="back__btn">＜</button>
        <p class="shop__name">{{$shopFind->name}}</p>
      </div>
    </div>
    <div class="detail__all">
      <div class="shop__detail">
        <img src="{{$shopFind->img_url}}">
        <div class="shop__info">
          <p class="shop__area">#{{$shopFind->area->name}}</p>
          <p class="shop__category">#{{$shopFind->category->name}}</p>
        </div>
        <div class="shop__description">
          <p>{{$shopFind->description}}</p>
        </div>
      </div>
    </div>
  </div>
  <div class="shop__reserve">
    <div class="shop__reserve-inner">
      <div class="reserve__ttl">
        <p>予約</p>
      </div>
      <div>
        <form>
          @csrf
          <div class="shop__reserve-date">
            <input type="date" id="input-date">
          </div>
          <div class="shop__reserve-time">
            <select class="shop__reserve-select" id="input-time">
              @foreach(config('time') as $time_id => $time)
              <option value="{{$time_id}}">{{$time}}</option>
              @endforeach
            </select>
          </div>
          <select class="shop__reserve-select" id="input-num">
            @foreach(config('number') as $number_id => $number)
            <option value="{{$number_id}}">{{$number}}</option>
            @endforeach
          </select>
        </form>
      </div>
      <div class="reserve__table">
        <table>
          <tr>
            <th>Shop</th>
            <td>{{$shopFind->name}}</td>
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
    <a href="" class="reserve__btn">
      <div class="reserve__btn-block">
        <p>予約する</p>
      </div>
    </a>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
@section('pageJs')
<script src="{{ mix('js/detail.js') }}"></script>
@endsection
@endsection