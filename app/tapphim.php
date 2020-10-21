<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tapphim extends Model
{
    //
    protected  $table ='tapphim';
    public $timestamps =false;
    public function phim(){
        return $this->hasOne('App\phim','id','id_phim');
    }
    public function serverten(){
        return $this->hasOne('App\server','id_server','id');
    }
}
