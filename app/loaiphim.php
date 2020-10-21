<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class loaiphim extends Model
{
    //
    protected $table = "loaiphim";
    public $timestamps =false;
    public function chitietloaiphim(){
        return $this->hasOne('App\chitietloaiphim','loaiphim','id');
    }
}
