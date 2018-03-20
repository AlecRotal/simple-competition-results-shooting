<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $fillable = [
      'name',
    ];

    public function rezultat() {
        $this-hasMany('App\Rezultat','disciplina_id');
    }
}
