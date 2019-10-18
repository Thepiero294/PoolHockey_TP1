<?php

namespace App\Http\Middleware;

use Closure;
use App\User;

class CheckMaxUsers
{
    /**
     * Vérifier qu'il y un maximum de 4 usagés inscrit
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