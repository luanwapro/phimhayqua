<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class silde extends Model
{
    //
    protected $table = "silde";
    public  $timestamps =false;

    public function phim(){
       return $this->belongsTo("App\phim","id_phim","id");
    }
}
