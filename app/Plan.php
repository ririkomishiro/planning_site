<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //ショップに対するリレーション
public function shops(){
    //ジャンルに多数のプランを有する。
    return $this->hasMany('App\Models\Shop');
}
}