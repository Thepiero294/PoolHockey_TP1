<?php

namespace App\Http\Controllers;

use App\Http\Resources\Joueur as JoueurRessource;
use Illuminate\Http\Request;
use App\Joueur;

/** 
 * Classe qui crée un controller de l'API du joueur
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class JoueurApiController extends Controller
{
    /**
     * Retourne une liste des ressources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $joueurs = Joueur::where('id_participant_fk', $id)->get();
        return new JoueurRessource($joueurs);
    }


}
