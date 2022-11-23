<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    public function create(Request $request)
    {
        $user_id = Auth::user()->id;
        $score = [
            'user_id' => $request->user_id,
            'shop_id' => $request->shop_id,
            'point' => $request->point,
            'comment' => $request->comment
        ];
        Score::create($score);
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
