<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function authors(){
        return $this->hasMany(Book::class);
    }
}
