<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Category;
use App\Models\Like;
use App\Models\Score;

class ShopController extends Controller
{
  public function index(Request $request)
  {
    $shops = Shop::with('area', 'category')->get();

    $categories = Category::get();
    $areas = Area::get();
    $likes = Like::all()->first();

    $area_id = $request->input('area_id');
    $category_id = $request->input('category_id');

    return view('index', [
      'shops' => $shops,
      'categories' => $categories,
      'areas' => $areas,
      'likes' => $likes,
      'area_id' => $area_id,
      'category_id' => $category_id
    ]);
  }


  public function search(Request $request)
  {
    $categories = Category::get();
    $areas = Area::get();
    $likes = Like::all()->first();

    $area_id = $request->input('area_id');
    $category_id = $request->input('category_id');
    $name = $request->input('name');

    $query = Shop::query();

    if (!empty($area_id)) {
      $query = Shop::where('area_id', $area_id);
    }

    if (!empty($category_id)) {
      $query = Shop::where('category_id', $category_id);
    }

    if (!empty($name)) {
      $query = Shop::where('name', 'like', '%' . self::escapeLike($name) . '%');
    }

    $shopsSearch = $query->get();

    return view('index', [
      'categories' => $categories,
      'areas' => $areas,
      'likes' => $likes,
      'shops' => $shopsSearch,
      'area_id' => $area_id,
      'category_id' => $category_id,
    ]);
  }

  public static function escapeLike($str)
  {
    return str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $str);
  }


  public function detail($shop_id)
  {
    $user = Auth::user();
    $shops = Shop::with('area', 'category')->get();
    $shopFind = Shop::find($shop_id);

    $scores = Score::find($shop_id);

    return view('detail', [
      'user' => $user,
      'shops' => $shops,
      'shopFind' => $shopFind,
      'scores' => $scores
    ]);
  }
}
