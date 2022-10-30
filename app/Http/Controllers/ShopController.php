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
    $area = Area::get();
    $like = Like::all()->first();

    return view('index', [
      'shops' => $shops,
      'categories' => $categories,
      'area' => $area,
      'like' => $like,
    ]);
  }
  /** 
  public function search(Request $request)
  {
    $user = Auth::user();
    $id = Auth::id();
    $categories = Category::get();
    $area = Area::get();
    $shops = Shop::get();
    $shops = Shop::with('area', 'Category')->get();


    $input = htmlspecialchars($_POST['input'], ENT_QUOTES);
    $area_id = htmlspecialchars($_POST['area_id'], ENT_QUOTES);
    $category_id = htmlspecialchars($_POST['category_id'], ENT_QUOTES);

    $query = Shop::query();

    if ($input) {
      $query->where('name', 'LIKE BINARY', "%{$input}%");
    } elseif ($input == "" && $area_id && $category_id == "All Category") {
      $query->where('area_id', $area_id);
    } elseif ($input == "" && $area_id == "All area" && $category_id) {
      $query->where('category_id', $category_id);
    } elseif ($input == "" && $area_id && $category_id) {
      $query->where('area_id', $area_id)->where('category_id', $category_id);
    }

    $shops = $query->get();

    if ($input == "" && $area_id == "All area" && $category_id == "All genru") {
      $shops = shop::get();
    }

    $param = [
      'input' => $request->input,
      'area' => $area,
      'categories' => $categories,
      'shops' => $shops,
      'user' => $user,
      'id' => $id,

    ];
    return view('index', $param, [
      'shops' => $shops,
    ]);
  }
   */

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

  /** 
  public function check()
  {
    $user = Auth::user();
    $param = ['user' => $user];
    return view('check', $param,);
  }
   */
}
