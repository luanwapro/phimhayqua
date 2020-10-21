<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chitietphimdaodien extends Model
{
    //
    protected $table ="chitietphimdaodien";
    public $timestamps =false;

    public function daodien1(){
        return $this->hasOne('App\daodien','id','daodien');
    }
}
