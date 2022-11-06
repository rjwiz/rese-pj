<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\Shop;

class ReservationController extends Controller
{
  public function create(ReservationRequest $request)
  {
    $user_id = Auth::user()->id;
    $shop_id = $request ->shop_id;
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

  /*
  public function show(ReservationRequest $request)
  {
    $data = $request->validated();

    return view('testreservation', [
      'num_of_users' => $data['num_of_users'],
      'start_at' => $data['start_at']
    ]);
  }
  */
}
