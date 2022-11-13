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
      @foreach($reservations as $reservation)
      <div class="reserve__table">
        <table>
          <div class="reserve__inner">
            <div class="reserve__inner-wrap">
              <img class="clock" src="{{asset('/images/clock.png')}}">
              <p class="reserve__number">予約{{$loop->iteration}}</p>
            </div>
            <form action="reservation/delete" method="post">
              @csrf
              <input type="hidden" name="id" value="{{$reservation->id}}">
              <input type="submit" class="batsu" value="×">
            </form>
          </div>
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
        <div class="shop__btn">
          <a href="{{ route('edit', ['reservation_id' => $reservation->id]) }}">
            <div class="shop__detail">
              <p>詳しくみる</p>
            </div>
          </a>
        </div>
      </div>
      @endforeach
    </div>
    <div class="user__info-inner">
      <div class="user">
        <p>{{Auth::user()->name}}さん</p>
      </div>
      <div class="like">
        <p class="ttl">お気に入り店舗</p>
        <div class="like__inner">
          @foreach($likes as $like)
          <div class="shop__card">
            <img src="{{$like->shop->img_url}}">
            <div class="card__inner">
              <div class="card__ttl">
                <h2>{{$like->shop->name}}</h2>
              </div>
              <div class="shop__info">
                <p class="shop__area">#{{$like->shop->area->name}}</p>
                <p class="shop__category">#{{$like->shop->category->name}}</p>
              </div>
              <div class="shop__btn">
                <a href="{{ route('detail', ['shop_id' => $like->shop->id]) }}">
                  <div class="shop__detail">
                    <p>詳しくみる</p>
                  </div>
                </a>
                <div class="like__icon">
                  <a href="{{ route('like/delete', ['shop_id' => $like->shop->id]) }}"><img src="/images/like.png"></a>
                </div>
              </div>
            </div>
          </div>
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