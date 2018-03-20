<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serije extends Model
{
    protected $fillable = [
      'rezultat_id',
      'strel_1',
      'strel_2',
      'strel_3',
      'strel_4',
      'strel_5',
      'strel_6',
      'strel_7',
      'strel_8',
      'strel_9',
      'strel_10',
      'notranje_desetke',
      'skupaj_streli',
      'num_serije',
    ];

    public function rezultat() {
        $this->belongsTo('App\Rezultat','rezultat_id');
    }
}
