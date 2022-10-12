<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Area;
use App\Models\Category;


class ShopController extends Controller
{
  public function index(Request $request)
  {
    $shops = Shop::with('area', 'category')->get();
    $categories = Category::get();
    $area = Area::get();
    $searchWord = $request->input('searchWord');
    $categoryId = $request->input('categoryId');
    $areaId = $request->input('areaId');

    return view('index', [
      'shops' => $shops,
      'categories' => $categories,
      'area' => $area,
      'searchWord' => $searchWord,
      'categoryId' => $categoryId,
      'areaId' => $areaId,
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
}
