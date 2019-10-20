<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

/** 
 * Classe qui crée un controller de remise à zéro du mot de passe
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Où renvoyer l'utilisateur après qu'il est réinitialiser son mot de passe.
     *
     * @var string
     */
    protected $redirectTo = '/home';
}
