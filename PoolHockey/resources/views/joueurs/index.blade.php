<!-- Fichier d'une page d'index

@author Pier-Olivier Fontaine et Marc-Antoine Fournier
-->

<link href="/css/app.css" rel="stylesheet">
        <title>Sélection des joueurs</title>
    @extends('layouts.app')
    @section('content')
    <div class="container">
        <h1 >{{ __('html.players') }}</h1>
        @if($users->count() >= 4)
            @foreach($tours as $tour)
            <h2> {{ __('html.turn') }} {{ App\User::participantActuel() }}<h2>
            <h3> {{ __('html.lastPlayer') }} {{ $tour->nom_joueur_choisi_tour_precedent }} <h3>
                @endforeach
        @endif
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">{{ __('html.fullName') }}</th>
                <th scope="col">{{ __('html.team') }}</th>
                <th scope="col">{{ __('html.numberPoints') }}</th>
                <th scope="col">{{ __('html.position') }}</th>
                <th scope="col">{{ __('html.userName') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($joueurs as $joueur)
                <tr>
                    <td> {{ $joueur->nom_complet }} </td>
                    <td> {{ $joueur->equipe }} </td>
                    <td> {{ $joueur->nb_points_prevus }} </td>
                    <td> {{ $joueur->position }} </td>
                    @if($joueur->id_participant_fk == null)
                        <td>-</td>
                    @else
                        <td> {{ App\Joueur::getNomParticipantSelonId($joueur->id_participant_fk )}}</td>
                    @endif

                    @if (App\User::joueurPick() && $joueur->id_participant_fk == null)
                        <td>
                            <form action="{{ route('joueurs.update', $joueur->id) }}" method="POST">
                            {{ csrf_field() }}
                                <button type="submit" class="btn btn-primary">{{ __('html.choose') }}</button>
                            </form>
                        </td>
                    @elseif ($joueur->id_participant_fk == null)
                        <td>
                            -
                        </td>
                    @else
                        <td>
                            {{ __('html.playerPicked') }}
                        </td>
                    @endif
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    @endsection
