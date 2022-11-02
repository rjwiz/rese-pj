@extends('layouts.layout')

@section('pageCss')
<link rel="stylesheet" href="css/register.css" />
@endsection
@include('layouts.header')
@section('contents')
<div class="contents">
  <div class="card">
    <div class="card__ttl">
      <p>Register</p>
    </div>
    <div class="card__inner">
      <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div>
          <input id="name" class="" type="text" name="name" placeholder="Username" :value="old('name')" required autofocus />
        </div>

        <!-- Email Address -->
        <div class="">
          <input id="email" class="" type="email" placeholder="Email" name="email" :value="old('email')" required />
        </div>

        <!-- Password -->
        <div class="">
          <input id="password" class="" type="password" placeholder="Password" name="password" required autocomplete="new-password" />
        </div>

        <div class="btn">
          <button class="">
            {{ __('登録') }}
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