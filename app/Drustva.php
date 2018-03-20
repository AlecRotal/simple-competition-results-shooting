<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drustva extends Model
{
    protected $fillable = [
      'name',
    ];

    public function tekmovanja() {
        return $this->hasMany('App\Tekmovanja','drustva_id');
    }

    public function tekmovalec() {
        return $this->hasMany('App\Tekmovalci','drustva_id');
    }

    public function ekipa() {
        return $this->hasMany('App\Ekipe','drustva_id');
    }
}
