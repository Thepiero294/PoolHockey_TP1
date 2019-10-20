<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassementApiController extends Controller
{
    /**
     * Retourne une liste des ressources.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $users = User::all();
        return $users;
    }
}
