<?php

namespace App\Http\Controllers;

use App\Http\Resources\User as UserRessource;
use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\Joueur as JoueurRessource;
use App\Joueur;

class ClassementApiController extends Controller
{
    /**
     * Retourne le classement estimé selon les points
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $joueurs1 = Joueur::where('id_participant_fk', 1)->get();
        $joueurs2 = Joueur::where('id_participant_fk', 2)->get();
        $joueurs3 = Joueur::where('id_participant_fk', 3)->get();
        $joueurs4 = Joueur::where('id_participant_fk', 4)->get();

        $valeurJ1 = 0;
        $valeurJ2 = 0;
        $valeurJ3 = 0;
        $valeurJ4 = 0;

        foreach($joueurs1 as $j1) {
            $valeurJ1 += $j1->nb_points_prevus;
        }
        foreach($joueurs2 as $j2) {
            $valeurJ2 += $j2->nb_points_prevus;
        }
        foreach($joueurs3 as $j3) {
            $valeurJ3 += $j3->nb_points_prevus;
        }
        foreach($joueurs4 as $j4) {
            $valeurJ4 += $j4->nb_points_prevus;
        }

        $valeurs = array($valeurJ1, $valeurJ2, $valeurJ3, $valeurJ4);
        $valeursTriées = rsort($valeurs);

        $ordreParticipants = implode('/', $valeurs);
        return $ordreParticipants;
    }
}
