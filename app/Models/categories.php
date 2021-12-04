<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $table = 'categories';
    use HasFactory;

    public function categories(){
        return $this->hasMany(books::class,'category_id');
    }
}
