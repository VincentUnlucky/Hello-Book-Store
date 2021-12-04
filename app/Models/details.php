<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    protected $table='details';
    use HasFactory;

    public function details(){
        return $this->belongsTo(books::class,'book_id');
    }
}
