<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    public function create($shop_id)
    {
        $like = new Score();
        $like->shop_id = $shop_id;
        $like->user_id = Auth::user()->id;
        $like->save();
        return back();
    }

    public function delete($shop_id)
    {
        $user_id = Auth::user()->id;
        $like = Score::where('shop_id', $shop_id)->where('user_id', $user_id)->first();
        $like->delete();
        return back();
    }
}
