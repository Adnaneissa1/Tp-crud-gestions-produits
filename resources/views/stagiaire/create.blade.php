<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Formulaire de Création</title>
</head>

<body>

    <h1>Formulaire de Création</h1>

    <form action="{{ route('stagiaire.store')}}" method="POST">
        @csrf
        <label for="username">Nom :</label>
        <input type="text" id="nom" name="nom" required><br>

        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom" required><br>

        <label for="class">Classe :</label>
        <input type="text" id="class" name="class" required><br>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="Créer">
    </form>

</body>

</html>