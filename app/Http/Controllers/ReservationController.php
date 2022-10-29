<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use App\Models\Shop;

class ReservationController extends Controller
{
    public function store(ReservationRequest $request, $id)
    {
        $user_id = Auth::id();
        $shop_id = Shop::find($id);
        $start_at = $request->only('date', 'time');
        $num_of_users = $request->only(['num_of_users']);
        Reservation::create($user_id, $shop_id, $start_at, $num_of_users);
        return redirect('done');
    }
}
