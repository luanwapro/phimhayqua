<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class server extends Model
{
    //
    protected $table ="server";
    public $timestamps=false;
    public function tapphim(){
        return $this->hasMany('App\tapphim','id_server','id');
    }
    public function phim(){
        return $this->hasOne('App\phim','id','id_phim');
    }
}
