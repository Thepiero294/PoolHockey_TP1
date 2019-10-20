<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** 
 * Classe qui retourne une resource transformée en tableau d'un joueur 
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
*/
class Joueur extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
