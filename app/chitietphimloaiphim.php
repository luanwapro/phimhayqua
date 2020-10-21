<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietphimloaiphim extends Model
{
    //
    protected $table ="chitietphimloaiphim";
    public $timestamps =false;
    public function phim(){
        return $this->hasOne('App\phim',"id","id_phim");
    }
    public function theloai(){
        return $this->hasOne('App\loaiphim','id','loaiphim');
    }
}
