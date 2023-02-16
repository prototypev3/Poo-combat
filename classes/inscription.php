<?php
require_once 'Database.php';
require_once 'Joueur.php';

if (isset($_POST['submit'])) {
    $db = new Database();
    $joueur = new J;
$joueur->creerJoueur($_POST['nom'], $_POST['mdp']);
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form method="post">
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" required><br>
        <label for="mdp">Mot de passe : </label>
        <input type="password" name="mdp" id="mdp" required><br>
        <input type="submit" name="submit" value="S'inscrire">
    </form>
</body>
</html>