<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tekmovanja extends Model
{
    protected $fillable = [
      'name',
      'drustva_id',
      'dayOfBeginnig',
      'dayOfEnd',
    ];

    public function drustvo() {
        $this->hasMany('App\Drustva','drustva_id');
    }
}
