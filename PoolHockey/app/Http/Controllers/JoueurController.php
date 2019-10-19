<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Joueur;
use App\Tour;
use App\User;

class JoueurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$joueurs = Joueur::joueursExistant();
        $joueurs = Joueur::orderbydesc('nb_points_prevus')->get();
        $users = User::all();
        $tours = Tour::all();
        return view('joueurs.index', ['joueurs' => $joueurs, 'users' => $users, 'tours' => $tours]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
