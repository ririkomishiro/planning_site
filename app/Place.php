<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
      //ショップに対するリレーション
public function shops(){
    //ジャンルに多数のプランを有する。
    return $this->hasMany('App\Models\Shop');
}
}
