@extends('layouts.layout')

@section('pageCss')
<link rel="stylesheet" href="css/index.css" />
@endsection

@include('layouts.header')

@section('contents')
<div class="shop__content">
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
      <div class="shop__detail">
        <a href="{{ route('detail', ['id' => $shop->id]) }}">詳しくみる</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection