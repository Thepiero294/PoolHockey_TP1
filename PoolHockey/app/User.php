<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Tour;

/** Classe qui définie ce qu'est un user (utilisateur)
 *
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    /**
     * Retourne l'id d'un utilisateur
     *
     * @return integer
     */
    public static function getUserId() {
        return auth()->user();
    }

    /**
     * Retourne la liste des joueurs des utilisateurs
     *
     * @return Joueur
     */
    public function joueurs() {
        return $this->hasMany('App\Joueur');
    }
}
