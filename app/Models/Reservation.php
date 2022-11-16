<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    protected $fillable = [
        'id',
        'user_id',
        'shop_id',
        'num_of_users',
        'date',
        'time',
        'start_at',
    ];

    public function shop()
    {
        return $this->belongsTo('App\Models\Shop');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function area()
    {
        return $this->belongsTo('App\Models\Area');
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Area');
    }

}
