<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Category;
use App\Models\Like;

class ShopController extends Controller
{
  public function index()
  {
    $shops = Shop::with('area', 'category')->get();

    $categories = Category::get();
    $areas = Area::get();
    $likes = Like::all()->first();

    return view('index', [
      'shops' => $shops,
      'categories' => $categories,
      'areas' => $areas,
      'likes' => $likes,
    ]);
  }


  public function search(Request $request)
  {
    $areas = Area::all();
    $categories = Category::all();
    $area_id = $request->area_id;
    $category_id = $request->category_id;
    $name = $request->input;
    $shop_id = Like::with('shop_id');
    $likes = Like::all()->first();

    if (!empty($area_id)) {
      $search = Shop::where('area_id', $area_id)->get();
    }
    if (!empty($category_id)) {
      $search = Shop::where('category_id', $category_id)->get();
    }
    if (!empty($name)) {
      $search = Shop::where('name', 'like', "%$name%")->get();
    }
    if (!empty($area_id) && ($category_id)) {
      $search = Shop::where('area_id', $area_id)->where('category_id', $category_id)->get();
    }
    if (!empty($area_id) && ($name)) {
      $search = Shop::where('area_id', $area_id)->where('name', "%$name%")->get();
    }
    if (!empty($category_id) && ($name)) {
      $search = Shop::where('category_id', $category_id)->where('name', "%$name%")->get();
    }
    if (!empty($area_id) && ($category_id) && ($name)) {
      $search = Shop::where('area_id', $area_id)->where('category_id', $category_id)->where('name', "%$name%")->get();
    }
    if ((empty($area_id)) && (empty($category_id)) && (empty($name))) {
      $search = Shop::all();
    }

    $param = [
      'areas' => $areas,
      'categories' => $categories,
      'area_id' => $area_id,
      'category_id' => $category_id,
      'shops' => $search,
      'shop_id' => $shop_id,
      'likes' => $likes
    ];
    return view('/index', $param);
  }

  public function detail($id)
  {
    $user = Auth::user();
    $shops = Shop::with('area', 'category')->get();
    $shopFind = Shop::find($id);

    return view('detail', [
      'user' => $user,
      'shops' => $shops,
      'shopFind' => $shopFind
    ]);
  }
}
