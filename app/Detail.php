<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Detail extends Model
{
    public function shop(){
    //プランいずれか1ジャンルに属する。
    return $this->belongsTo(Shop::class);
}
}