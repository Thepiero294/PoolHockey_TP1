<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

/**
 * Middleware d'identification
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class Authenticate extends Middleware
{
    /**
     * Obtient le chemin où l'utilisateur devrait être redirigé lorsqu'il n'est pas authentifié.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            return route('login');
        }
    }
}
