<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tekmovalci extends Model
{
    protected $fillable = [
      'firstname',
      'lastname',
      'drustva_id',
      'tekmovanja_id',
      'ekipe_id',
    ];

    public function drustvo() {
        $this->belongsTo('App\Drustva','drustva_id');
    }
    public function tekmovanja() {
        $this->belongsTo('App\Tekmovanja','tekmovanja_id');
    }
    public function ekipa() {
        $this->belongsTo('App\Ekipe','ekipe_id');
    }
    public function rezultat() {
        return $this->hasOne('App\Rezultat','rezultat_id');
    }
}
