@extends('layouts.layout')

@section('pageCss')
<link rel="stylesheet" href="css/done.css" />
@endsection
@include('layouts.header')
@section('contents')
<div class="contents">
  <div class="content__inner">
    <div class="content__msg">
      <p>ご予約を変更いたしました。</p>
    </div>
    <div class="btn">
      <a href="/">戻る</a>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  @section('pageJs')

  @endsection
  @endsection