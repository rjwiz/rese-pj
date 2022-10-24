@extends('layouts.layout')

@section('pageCss')
<link rel="stylesheet" href="css/index.css" />
@endsection
<div class="wrap">
  @include('layouts.header')
  @section('contents')
  <div class="search_area">
    <form action="/" method="POST">
      @csrf
      <div class="search__area">
        <select id="area_id" name="area_id" class="area_name" value="area_id">
          <option>All area</option>
          @foreach($area as $area)
          <option class="name-item" value="{{$area->id}}">
            {{$area->name}}
          </option>
          @endforeach
        </select>
        <select id="category_id" name="category_id" class="category_name" value="category_id">
          <option>All genre</option>
          @foreach($categories as $category)
          <option class="name-item" value="{{$category->id}}">
            {{$category->name}}
          </option>
          @endforeach
        </select>
        <button class="search__button">
          <img class="musimegane" src="{{asset('/images/musimegane.png')}}" alt="">
        </button>
        <input type="search" name="input" class="search_text_area" placeholder="search...">
      </div>
    </form>
  </div>
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
{{--<script src="{{ mix('js/search.js') }}"></script>--}}
@endsection
@endsection