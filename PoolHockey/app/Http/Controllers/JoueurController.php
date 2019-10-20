<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joueur;
use App\Tour;
use App\User;

/** 
 * Classe qui crée le controller d'un joueur
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class JoueurController extends Controller
{
    /**
     * Retourne une liste de ressource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$joueurs = Joueur::joueursExistant();
        $joueurs = Joueur::orderbydesc('nb_points_prevus')->get();
        $users = User::all();
        $tours = Tour::all();

        $listeNomUsers = array();
        foreach($users as $user) {
            $listeNomUsers[] = $user->name;
        }
        return view('joueurs.index', ['joueurs' => $joueurs, 'users' => $users, 'tours' => $tours, 'listeUsers' => $listeNomUsers]);
    }

    /**
     * Met à jour la ressource spécifique.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $joueur = Joueur::where('id', $id)->first();
        $tour = Tour::first();
        $joueur->id_participant_fk = $tour->id_participant;
        if ($tour->id_participant == 4) {
            $tour->id_participant = 1;
        }
        else {
            $tour->id_participant += 1;
        }
        $tour->nom_joueur_choisi_tour_precedent = $joueur->nom_complet;

        $joueur->save();
        $tour->save();
        return redirect()->route("joueurs.index", $id);
    }
}
