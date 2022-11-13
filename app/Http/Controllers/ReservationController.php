<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Category;
use App\Models\Like;

class ReservationController extends Controller
{
  public function create(ReservationRequest $request)
  {
    $user_id = Auth::user()->id;
    $shop_id = $request->shop_id;
    $date = $request->date;
    $time = ' ' . $request->time;
    $start_at = $date .= $time;
    $param = [
      'user_id' => $user_id,
      'shop_id' => $request->shop_id,
      'start_at' => $start_at,
      'num_of_users' => $request->num_of_users
    ];
    Reservation::create($param);
    return redirect('/done');
  }

  public function delete(Request $request)
  {
    Reservation::find($request->id)->delete();
    return redirect('/mypage');
  }


  public function show($id)
  {

    $reservation_id = Reservation::Find($id);
    $reservation_shop = $reservation_id->shop_id;

    return view('edit', []);
  }
}
