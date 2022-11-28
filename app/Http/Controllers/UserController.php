<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Category;
use App\Models\Like;
use App\Models\Reservation;

class UserController extends Controller
{
  public function mypage()
  {
    $shops = Shop::all();
    $user_id = Auth::id();
    $reservations = Reservation::where('user_id', $user_id)->get();
    $likes = Like::where('user_id', $user_id)->get();

    return view('mypage', [
      'shops' => $shops,
      'likes' => $likes,
      'reservations' => $reservations,
    ]);
  }
}
