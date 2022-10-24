@extends('layouts.layout')

@section('pageCss')
<link rel="stylesheet" href="css/thanks.css" />
@endsection
<div class="wrap">
  @include('layouts.header')
</div>
@section('contents')
<div class="contents">
  <div class="content__inner">
    <div class="content__msg">
      <p>会員登録ありがとうございます</p>
    </div>
    <div class="btn">
      <a href="/">ログインする</a>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
  @section('pageJs')

  @endsection
  @endsection