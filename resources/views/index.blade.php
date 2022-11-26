@extends('layouts.layout')

@section('pageCss')
<link rel="stylesheet" href="css/index.css" />
@endsection
<div class="wrap">
  @include('layouts.header')
  @section('contents')
  <div class="search_area">
    <form action="search" method="POST">
      @csrf
      <div class="search__area">
        <select name="area_id" class="area_name" value="{{$area_id}}" id="area__select">
          <option value="">All area</option>
          @foreach($areas as $area)
          <option value="{{$area->id}}">
            {{$area->name}}
          </option>
          @endforeach
        </select>
        <select name="category_id" class="category_name" value="{{$category_id}}" id="category__select">
          <option value="">All genre</option>
          @foreach ($categories as $category)
          <option value="{{$category->id}}" @if(old('category_id')==$category->id ) selected @endif>{{ $category->name }}</option>
          @endforeach
        </select>
        <button class="search__button" type="submit" id="submit__btn">
          <img class="musimegane" src="{{asset('/images/musimegane.png')}}" alt="">
        </button>
        <input type="text" name="name" class="search_text_area" placeholder="search...">
      </div>
    </form>
  </div>
</div>
@if($shops->isEmpty())
<p>検索結果は0件です</p>
@else
<div class="shop__content" id="search-target">
  @foreach($shops as $shop)
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
        @auth
        @if(is_null($likes))
        <div class="like__icon">
          <a href="{{ route('like', ['shop_id' => $shop->id]) }}"><img src="/images/unlike.png"></a>
        </div>
        @elseif($likes->like_exist(Auth::user()->id,$shop->id))
        <div class="like__icon">
          <a href="{{ route('like/delete', ['shop_id' => $shop->id]) }}"><img src="/images/like.png"></a>
        </div>
        @else
        <div class="like__icon">
          <a href="{{ route('like', ['shop_id' => $shop->id]) }}"><img src="/images/unlike.png"></a>
        </div>
        @endif
        @endauth
        @guest
        <div class="like__icon">
          <a href="{{ route('like', ['shop_id' => $shop->id]) }}"><img src="/images/unlike.png"></a>
        </div>
        @endguest
      </div>
    </div>
  </div>
  @endforeach
  @endif
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
@section('pageJs')
<script src="{{ mix('js/search.js') }}"></script>
@endsection
@endsection