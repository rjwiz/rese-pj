@extends('layouts.layout')

@section('pageCss')
<link rel="stylesheet" href="css/index.css" />
@endsection
<div class="wrap">
  @include('layouts.header')
  @section('contents')
  <div>
    <select id="search-area">
      <option value="">All Area</option>
      @foreach ($area as $area)
      <option value="">{{$area->name}}</option>
      @endforeach
    </select>
    <select id="search-category">
      <option value="">All Category</option>
      @foreach ($categories as $category)
      <option value="">{{$category->name}}</option>
      @endforeach
    </select>
    <input type="text" id="search-text">
  </div>
</div>
<div class="search-result"></div>
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
      <a href="{{ route('detail', ['id' => $shop->id]) }}">
        <div class="shop__detail">
          <p>詳しくこちら</p>
        </div>
      </a>
    </div>
  </div>
  @endforeach
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
@section('pageJs')
<script src="{{ mix('js/search.js') }}"></script>
@endsection
@endsection