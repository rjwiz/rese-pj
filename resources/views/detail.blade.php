@extends('layouts.layout')

@section('pageCss')
<link rel="stylesheet" href="/css/detail.css" />
@endsection

@include('layouts.header')

@section('contents')
<div class="detail__ttl">
  <div>
    <button onclick="location.href=' /'">＜</button>
    <p>{{$shopFind->name}}</p>
  </div>
</div>
<div>
  <div>
    <img src="{{$shopFind->img_url}}">
    <div>
      <p class="shop__area">#{{$shopFind->area->name}}</p>
      <p class="shop__category">#{{$shopFind->category->name}}</p>
    </div>
    <div>
      <p>{{$shopFind->description}}</p>
    </div>
  </div>
  <div>
    <div>
      <div>
        <p>予約</p>
      </div>
      <div>
        <form>
          @csrf
          <input type="date">
          <input type="time">
          <select>
            @foreach(config('number') as $number_id => $number)
            <option value="{{$number_id}}">{{$number}}</option>
            @endforeach
          </select>
        </form>
      </div>
      <div>
        <table>
          <tr>
            <th>Shop</th>
            <td>{{$shopFind->name}}</td>
          </tr>
          <tr>
            <th>Date</th>
            <td></td>
          </tr>
          <tr>
            <th>Time</th>
            <td></td>
          </tr>
          <tr>
            <th>Number</th>
            <td></td>
          </tr>
        </table>
      </div>
    </div>
    <a href="" class="">
      <div class="">
        <p>予約する</p>
      </div>
    </a>
  </div>
</div>
@endsection