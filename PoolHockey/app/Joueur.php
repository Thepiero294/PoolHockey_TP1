<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    static public function joueursExistant() 
    {
        return static::all();
    }
}
