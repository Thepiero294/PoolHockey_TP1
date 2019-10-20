<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

/**
 * Classe qui définie ce qu'est un joueur
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class Joueur extends Model
{
    /** 
     * Retourne les joueurs existants
     * 
     * @return Joueur
     */
    static public function joueursExistant()
    {
        return static::all();
    }

    /**
     * Retourne la liste des user à qui appartiennent les joueurs
     * 
     * @return User
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    /**
     * Retourne le nom du participant selon son id
     * 
     * @return string
     */
    public static function getNomParticipantSelonId($id) {
        $nomParticipant = User::where('id', $id)->first();
        return $nomParticipant->name;
    }
}
