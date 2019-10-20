<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Classe qui définie ce qu'est un tour 
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class Tour extends Model
{
    /**
     * Méthode retourne le id du participant à qui c'est le tour
     * 
     * @return Tour
     */
    public static function getIdParticipant() {
        return Tour::first();
    }

    /**
     * Méthourne qui retourne le joueur choisi précédemment
     * 
     * @return string 
     */
    public static function joueurChoisiPrecedent() {
        return Tour::first()->nom_joueur_choisi_tour_precedent;
    }
}
