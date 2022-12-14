<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
  protected $fillable = [
    'name',
    'area_id',
    'category_id',
    'description',
    'img_url',
  ];

  public function area()
  {
    return $this->belongsTo('App\Models\Area');
  }

  public function category()
  {
    return $this->belongsTo('App\Models\Category');
  }

  public function reservations()
  {
    return $this->hasMany('App\Models\Reservation');
  }

  public function likes()
  {
    return $this->hasMany('App\Models\Like');
  }

  public function scores()
  {
    return $this->hasMany('App\Models\Score');
  }
}
