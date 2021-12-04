<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $table='books';
    use HasFactory;

    public function books(){
        return $this->belongsTo(Categories::class);
    }

    public function books1(){
        return $this->hasOne(details::class);
    }
}
