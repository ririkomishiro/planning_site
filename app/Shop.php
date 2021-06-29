<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
  //ジャンルに対するリレーション
public function plan(){
    //プランいずれか1ジャンルに属する。
    return $this->belongsTo('App\Models\Plan');
}
    
     //ジャンルに対するリレーション
public function place(){
    //プランいずれか1ジャンルに属する。
    return $this->belongsTo('App\Models\Place');
}
public function details(){
    //ジャンルに多数のプランを有する。
    return $this->hasMany('App\Models\Shop');
}
}
