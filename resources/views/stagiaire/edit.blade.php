<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Modifier Stagiaire</title>
</head>

<body>

    <h1>Modifier Stagiaire</h1>

    <form action="{{ route('stagiaire.update', $stagiaire['id']) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" value="{{ $stagiaire['nom'] }}" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" value="{{ $stagiaire['prenom'] }}" required><br>

        <label for="class">Classe :</label>
        <input type="text" id="class" name="class" value="{{ $stagiaire['class'] }}" required><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" value="{{ $stagiaire['email'] }}" required><br>

        <input type="submit" value="Mettre à jour">
    </form>

</body>

</html>
