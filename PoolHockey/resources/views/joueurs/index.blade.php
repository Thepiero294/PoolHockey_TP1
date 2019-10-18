<!-- Fichier d'une page d'index

@author Pier-Olivier Fontaine et Marc-Antoine Fournier
-->

<link href="/css/app.css" rel="stylesheet">
        <title>Laravel</title>
    <div class="container">
        <h1 >Joueurs</h1>
        <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Nom complet</th>
                <th scope="col">Équipe</th>
                <th scope="col">Nombre de points prévus</th>
                <th scope="col">Position</th>
                <th scope="col">Participant</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($joueurs as $joueur)
                <tr>
                    <td> {{ $joueur->nom_complet }} </td>
                    <td> {{ $joueur->equipe }} </td>
                    <td> {{ $joueur->nb_points_prevus }} </td>
                    <td> {{ $joueur->position }} </td>  
                    <td> - </td>  
                </tr>
            @endforeach
        </tbody>
        </table>
    </div>