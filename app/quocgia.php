<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quocgia extends Model
{
    //
    protected $table = "quocgia";
    public $timestamps =false;
    public function phim(){
        return $this->hasMany('App\quocgia','quocgia','id');
    }
}
