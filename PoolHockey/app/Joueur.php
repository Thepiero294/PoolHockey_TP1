<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Joueur extends Model
{
    static public function joueursExistant() 
    {
        return static::all();
    }

    public static function user() {
        return $this->belongsTo('App\User');
    }

    public static function getNomParticipantSelonId($id) {
        $nomParticipant = User::where('id', $id)->first();
        return $nomParticipant->name;
    }
}
