@extends('layouts.layout')

@section('pageCss')
<link rel="stylesheet" href="css/login.css" />
@endsection
@include('layouts.header')
@section('contents')
<div class="contents">
  <div class="card">
    <div class="card__ttl">
      <p>Login</p>
    </div>
    <div class="card__inner">
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <div>
          <input id="" class="" type="email" name="email" placeholder="Email" :value="old('email')" required autofocus />
        </div>

        <!-- Password -->
        <div class="">
          <input id="password" class="" type="password" name="password" placeholder="Password" required autocomplete="current-password" />
        </div>

        <div class="btn">
          <button class="">
            {{ __('ログイン') }}
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
@section('pageJs')

@endsection
@endsection