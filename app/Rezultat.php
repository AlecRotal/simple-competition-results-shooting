<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezultat extends Model
{
    protected $fillable = [
      'kategorija_id',
      'disciplina_id',
      'tekmovalci_id',
    ];

    public function kategorija() {
        $this->belongsTo('App\Kategorija','kategorija_id');
    }
    public function disciplina() {
        $this->belongsTo('App\Disciplina','disciplina_id');
    }
    public function tekmovalec() {
        $this->belongsTo('App\Tekmovalci','tekmovalci_id');
    }
    public function serije(){
        $this->hasMany('App\Serije','rezultat_id');
    }
}
