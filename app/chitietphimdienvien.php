<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietphimdienvien extends Model
{
    //
    protected $table ="chitietphimdienvien";
    public $timestamps =false;
    public function dienvien1(){
        return $this->hasOne('App\dienvien','id','dienvien');
    }
}
