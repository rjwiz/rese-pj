<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable = ['user_id', 'shop_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function shop()
    {
        return $this->belongsTo('App\Models\Shop');
    }

    //いいね確認用
    public function like_exist($id, $shop_id)
    {
        $exist = Like::where('user_id', '=', $id)->where('shop_id', '=', $shop_id)->get();

        if (!$exist->isEmpty()) {
            return true;
        } else {
            return false;
        }
    }
}
