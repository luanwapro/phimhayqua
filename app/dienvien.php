<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dienvien extends Model
{
    protected $table="dienvien";
    public $timestamps = false;

    public function chitietdienvien(){
        return $this->hasMany("App\chitietphimdienvien","dienvien","id");
    }
}
