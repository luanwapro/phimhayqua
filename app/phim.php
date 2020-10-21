<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phim extends Model
{
    //
    protected $table = "phim";
    public $timestamps =false;
    public function silde(){
       return $this->hasMany("App\silde","id_phim","id");
    }
    public function qg(){
        return $this->hasOne("App\quocgia","id","quocgia");
    }

    public function chitietphim(){
        return $this->hasMany('App\chitietphimloaiphim',"id_phim","id");
    }
    public function tapphim(){
        return $this->hasMany('App\tapphim','id_phim','id');
    }
    public function server(){
        return $this->hasMany('App\server','id_phim','id');
    }
}
