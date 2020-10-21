<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class daodien extends Model
{
    //
    protected $table="daodien";
    public $timestamps = false;

    public function chitietdaodien(){
        return $this->hasMany('App\chitietphimdaodien','daodien','id');
    }

}
