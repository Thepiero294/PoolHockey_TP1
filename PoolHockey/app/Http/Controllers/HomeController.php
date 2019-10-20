<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/** 
 * Classe qui crée un controller de l'accueil
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class HomeController extends Controller
{
    /**
     * Crée une nouvelle instance du controller.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Affiche le dashboard de l'application.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('joueurs');
    }
}
