<?php

namespace App\Http\Middleware;

use Illuminate\Cookie\Middleware\EncryptCookies as Middleware;

/** 
 * Classe qui crée un middleware d'encryption des cookies.
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier.
 */
class EncryptCookies extends Middleware
{
    /**
     * Les noms des cookies qui ne devraient pas être encryptés.
     *
     * @var array
     */
    protected $except = [
        //
    ];
}
