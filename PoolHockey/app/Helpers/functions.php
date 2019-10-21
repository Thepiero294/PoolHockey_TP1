<?php
/**
 * Fichier php qui contient des fonctions utilisées dans les vues
 *
 * @author Pier-Olivier Fontaine et Marc-Antoine Fournier
 */
use App\User;
use App\Tour;
use App\Joueur;

/**
* Retourne le nom du participant selon son id
*
* @return string
*/
function getNomParticipantSelonId($id) {
    $nomParticipant = User::where('id', $id)->first();
    return $nomParticipant->name;
}

/**
* Retourne le participant actuel qui fait un choix de joueur
*
* @return User
*/
function participantActuel() {
    $idParticipantActuel = Tour::first()->id_participant;
    $participantActuel = User::where('id', $idParticipantActuel)->first();
    return $participantActuel->name;
}

/**
* Méthode retourne le id du participant à qui c'est le tour
*
* @return Tour
*/
function getIdParticipant() {
    return Tour::first();
}

/**
* Retourne vrai lorsq'un joueur possède le même id participant qu'un id du user
*
* @return bool
*/
function joueurPick() {
    if (getIdParticipant()->id_participant != User::getUserId()->id) {
        return false;
    }
    else
        return true;
}

/**
 * Retourne le nombre de gardiens choisis par un utilisateur
 *
 * @return int Nombre de gardiens choisis
 */
function getNbGardiens() {
    return Joueur::where([['position', 'Gardien'],
        ['id_participant_fk', Auth::user()->id]])->get()->count();
}

/**
 * Retourne le nombre d'attaquants choisis par un utilisateur
 *
 * @return int Nombre d'attaquants choisis
 */
function getNbAttaquants() {
    return Joueur::where([['position', 'Attaquant'],
        ['id_participant_fk', Auth::user()->id]])->get()->count();
}

/**
 * Retourne le nombre de défenseurs choisis par un utilisateur
 *
 * @return int Nombre de défenseurs choisis
 */
function getNbDefenseurs() {
    return Joueur::where([['position', 'Défenseur'],
        ['id_participant_fk', Auth::user()->id]])->get()->count();
}

/**
 * Retourne le nombre de joueurs total choisis par un utilisateur
 *
 * @return int Nombre de joueurs total
 */
function getNbJoueurs() {
    return Joueur::where(['id_participant_fk' => Tour::first()->id_participant])->get()->count();
}
