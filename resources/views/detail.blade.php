@extends('layouts.layout')

@section('pageCss')
<link rel="stylesheet" href="/css/detail.css" />
@endsection
@include('layouts.header')
@section('contents')
<div class="wrap">
  <div>
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
        @if ($errors->any())
        <div class="errors">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        <form method="post" action="{{ route('reservation') }}">
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
          <input type="hidden" name="shop_id" value="{{$shopFind->id}}">
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
    <div>
      @auth
      <input type="submit" value="予約" class="reserve__btn-block">
      @endauth
    </div>
    </form>
    @guest
    <button class="reserve__btn-block">
      <a href="/login">予約する</a>
    </button>
    @endguest
  </div>
</div>
<div class="wrap__score">
  <h2>口コミ</h2>
  <div class="score__form">
    <p>{{Auth::user()->name}}さんも口コミを投稿しよう！</p>
    <form method="POST" action="{{ route('score', ['shop_id' => $shopFind->id]) }}">
      @csrf
      <div class="score__form-comment">
        <textarea type="text" name="comment" style="width:100%; height:80px;" placeholder="コメントを記載してください…"></textarea>
      </div>
      <div class="wrap__score-inner">
        <div>
          <label>評価</label>
          <select type="text" name="point">
            @foreach(config('score') as $key => $score)
            <option value="{{ $key }}">{{ $score }}</option>
            @endforeach
          </select>
        </div>
        @auth
        <input type="submit" value="投稿する" class="score__btn-block">
        @endauth
      </div>
    </form>
  </div>
  <div class="users__score">
    <p>{{Auth::user()->name}}さん</p>
    <div class="users__score-inner">
      <div class="users__score-comment">
        <p>kome</p>
      </div>
      <p class="users__score-point">star</p>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
@section('pageJs')
<script src="{{ mix('js/detail.js') }}"></script>
@endsection
@endsection