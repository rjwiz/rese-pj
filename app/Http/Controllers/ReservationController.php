<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\Shop;
use App\Models\Reserve;

class ReservationController extends Controller
{
  public function create(ReservationRequest $request)
  {
    $data = $request->validated();
    $user_id = Auth::id();
    $shop_id = $request->id;

    Reservation::create([
      'user_id' => $user_id,
      'shop_id' => $shop_id,
      'num_of_users' => (int) $data['num_of_users'],
      'start_at' => $data['start_at'],
    ]);

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
