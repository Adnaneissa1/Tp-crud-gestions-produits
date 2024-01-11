<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>

    </title>
</head>

<body>
    <a href="{{ route('stagiaire.create') }}">
        <button>Creér un stagiare</button>
    </a>
    <h1>Liste des Stagiaires</h1>

    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Class</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>

        @foreach($stagiaires as $stagiaire)
        <tr>
            <td>{{ $stagiaire['nom'] }}</td>
            <td>{{ $stagiaire['prenom'] }}</td>
            <td>{{ $stagiaire['class'] }}</td>
            <td>{{ $stagiaire['email'] }}</td>
            <td>
                <a href="{{ route('stagiaire.show', ['stagiaire' =>  $stagiaire['id']]) }}">
                    <button>Détails</button>
                </a>
                <a href="{{ route('stagiaire.edit', ['stagiaire' =>  $stagiaire['id']]) }}">
                    <button>Modifier</button>
                </a>
                
                <form action="{{route('stagiaire.destroy', ['stagiaire' => $stagiaire['id']]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                <button type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <br>
</body>

</html>