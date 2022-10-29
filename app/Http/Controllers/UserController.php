<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Category;
use App\Models\Like;

class UserController extends Controller
{
    public function mypage()
    {
        $shops = Shop::with('area', 'category')->get();
        $user = Auth::user();
        $categories = Category::get();
        $area = Area::get();
        $likes = Like::all()->first();

        return view('mypage', [
            'user' => $user,
            'shops' => $shops,
            'categories' => $categories,
            'area' => $area,
            'likes' => $likes,
        ]);
    }
}
