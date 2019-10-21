<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** 
 * Classe qui retourne une resource transformée en tableau d'un user
 * 
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
*/
class User extends JsonResource
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