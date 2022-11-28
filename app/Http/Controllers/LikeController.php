<?php

namespace App\Http\Controllers;

use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
  public function create($shop_id)
  {
    $like = new Like();
    $like->shop_id = $shop_id;
    $like->user_id = Auth::user()->id;
    $like->save();
    return back();
  }

  public function delete($shop_id)
  {
    $user_id = Auth::user()->id;
    $like = Like::where('shop_id', $shop_id)->where('user_id', $user_id)->first();
    $like->delete();
    return back();
  }
}
