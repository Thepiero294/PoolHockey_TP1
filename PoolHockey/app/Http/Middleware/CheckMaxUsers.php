<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

/** 
 * Classe qui crée un middleware de maximum d'usagers
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class CheckMaxUsers
{
    /**
     * Vérifie qu'il y un maximum de 4 usagés inscrits.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (User::count() >= 4) {
            return redirect('login');
        }

        return $next($request);
    }
}
