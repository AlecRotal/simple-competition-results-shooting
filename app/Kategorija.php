<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategorija extends Model
{
    protected $fillable = [
      'name',
    ];

    public function rezultat(){
        $this->hasMany('App\Rezultat','kategorija_id');
    }
}
