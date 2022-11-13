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
      <img src="{{$reservation->img_url}}">
      <div class="shop__info">
        <p class="shop__area">#{{$reservation->area->name}}</p>
        <p class="shop__category">#{{$reservation->category->name}}</p>
      </div>
      <div class="shop__description">
        <p>{{$reservation->$shop->description}}</p>
      </div>
    </div>
  </div>
  <div class="reservation">
    <div class="reserve__table">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
@section('pageJs')
<script src="{{ mix('js/detail.js') }}"></script>
@endsection
@endsection