<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public static function getIdParticipant() {
        return Tour::first();
    }

    public static function joueurChoisiPrecedent() {
        return Tour::first()->nom_joueur_choisi_tour_precedent;
    }
}
