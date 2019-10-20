<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ConfirmsPasswords;

/** 
 * Classe qui crée un controller de confirmation de mot de passe
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class ConfirmPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Confirm Password Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password confirmations and
    | uses a simple trait to include the behavior. You're free to explore
    | this trait and override any functions that require customization.
    |
    */

    use ConfirmsPasswords;

    /**
     * Retourne où l'on doit renvoyer si l'url plante.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Crée une nouvelle instance du controller.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
}
