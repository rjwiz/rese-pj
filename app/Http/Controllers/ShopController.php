<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Category;


class ShopController extends Controller
{
  public function index()
  {
    $shops = Shop::with('area', 'category')->get();
    $categories = Category::get();
    $area = Area::get();
    $user = Auth::user();

    return view('index', [
      'user' => $user,
      'shops' => $shops,
      'categories' => $categories,
      'area' => $area,
    ]);
  }

  public function detail($id)
  {
    $shops = Shop::with('area', 'category')->get();
    $shopFind = Shop::find($id);

    return view('detail', [
      'shops' => $shops,
      'shopFind' => $shopFind
    ]);
  }

  public function mypage()
  {
    $shops = Shop::with('area', 'category')->get();
    $categories = Category::get();
    $area = Area::get();
    $user = Auth::user();

    return view('mypage', [
      'user' => $user,
      'shops' => $shops,
      'categories' => $categories,
      'area' => $area,
    ]);
  }

  /** 
  public function check()
  {
    $user = Auth::user();
    $param = ['user' => $user];
    return view('check', $param,);
  }
   */
}
