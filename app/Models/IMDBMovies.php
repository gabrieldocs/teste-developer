<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IMDBMovies extends Model
{
    use HasFactory;

    public function gender(){
        return $this->belongsTo(IMDBGenders::class);
    }
}
