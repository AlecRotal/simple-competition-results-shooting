<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ekipe extends Model
{
    protected $fillable = [
      'name', 'drustva_id',
    ];

    public function drustvo() {
        $this->belongsTo('App\Drustva','drustva_id');
    }
}
