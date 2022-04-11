<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //bisa melihat kategori sesuai kolom categpry_id
    public function refrate()
    {
        return $this->belongsTo('App\Category','category_id');
    }
}
