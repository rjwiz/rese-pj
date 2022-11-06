<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $fillable = [
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

    //予約確認用
    public function reservation_exist($id, $shop_id)
    {
        $exist = Reservation::where('user_id', '=', $id)->where('shop_id', '=', $shop_id)->get();

        if (!$exist->isEmpty()) {
            return true;
        } else {
            return false;
        }
    }
}
