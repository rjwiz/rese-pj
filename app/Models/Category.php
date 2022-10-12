<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
    'name',
  ];

  public function getList()
  {
    $categories = Category::pluck('name', 'id');
    return $categories;
  }

  public function relation()
  {
    return $this->hasOne('App\Models\Shop');
  }
}
