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
     * Retourne vrai lorsq'un joueur possède le même id participant qu'un id du user
     * 
     * @return bool
     */
    public static function joueurPick() {
        if (Tour::getIdParticipant()->id_participant != User::getUserId()->id) {
            return false;
        }
        else return true;
    }

    /**
     * Retourne la liste des joueurs des utilisateurs
     * 
     * @return Joueur
     */
    public function joueurs() {
        return $this->hasMany('App\Joueur');
    }

    /**
     * Retourne le participant actuel qui fait un choix de joueur
     * 
     * @return User
     */
    public static function participantActuel() {
        $idParticipantActuel = Tour::first()->id_participant;
        $participantActuel = User::where('id', $idParticipantActuel)->first();
        return $participantActuel->name;
    }

    /** 
     * Retourne le nombre d'utilisateurs
     * 
     * @return integer
     */
    public static function getNbUsers() {
        return static::all()->count();
    }
}
