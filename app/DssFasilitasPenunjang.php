<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DssFasilitasPenunjang extends Model
{
    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];
    public function kost()
    {
        return $this->belongsTo('App\DssKost');
    }
}
