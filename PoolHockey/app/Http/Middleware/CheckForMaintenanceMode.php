<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode as Middleware;

/** 
 * Middleware de maintenance
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class CheckForMaintenanceMode extends Middleware
{
    /**
     * The URIs that should be reachable while maintenance mode is enabled.
     * L'URIs qui devrait être atteignable lorsque le mode maintenance est activé.
     * 
     * @var array
     */
    protected $except = [
        //
    ];
}
