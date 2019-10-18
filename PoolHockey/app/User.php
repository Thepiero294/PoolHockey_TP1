<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Tour;

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


    public static function getUserId() {
        return auth()->user();
    }

    public static function joueurPick() {
        if (Tour::getIdParticipant()->id_participant != User::getUserId()->id) {
            return false;
        }
        else return true;
    }

    public function joueurs() {
        return $this->hasMany('App\Joueur');
    }

    public static function participantActuel() {
        $idParticipantActuel = Tour::first()->id_participant;
        $participantActuel = User::where('id', $idParticipantActuel)->first();
        return $participantActuel->name;
    }
}
