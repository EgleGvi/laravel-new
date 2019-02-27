<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function books(){
        return $this->belongsTo(Author::class);
    }
}
