@extends('layouts.layout')

@section('pageCss')
<link rel="stylesheet" href="css/mypage.css" />
@endsection
<div class="wrap">
  @include('layouts.header')
</div>
@section('contents')
<div class="wrap__inner">
  <div class="user__info">
    <div class="reservation">
      <p class="ttl">予約状況</p>
      <div class="reserve__table">
        <table>
          <tr>
            <th>Shop</th>
            <td>shopname</td>
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
    <div class="user__info-inner">
      <div class="user">
        <p>{{$user->name}}さん</p>
      </div>
      <div class="like">
        <p class="ttl">お気に入り店舗</p>
        <div class="like__inner">
          @foreach($shops as $shop)
          @if($likes->like_exist(Auth::user()->id,$shop->id))
          <div class="shop__card">
            <img src="{{$shop->img_url}}">
            <div class="card__inner">
              <div class="card__ttl">
                <h2>{{$shop->name}}</h2>
              </div>
              <div class="shop__info">
                <p class="shop__area">#{{$shop->area->name}}</p>
                <p class="shop__category">#{{$shop->category->name}}</p>
              </div>
              <div class="shop__btn">
                <a href="{{ route('detail', ['shop_id' => $shop->id]) }}">
                  <div class="shop__detail">
                    <p>詳しくみる</p>
                  </div>
                </a>
              </div>
            </div>
          </div>
          @endif
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  @section('pageJs')

  @endsection
  @endsection