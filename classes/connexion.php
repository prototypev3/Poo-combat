<?php
require_once 'Database.php';
require_once 'Joueur.php';

session_start();

if (isset($_POST['submit'])) {
    $db = new Database();
    $joueur = $db->getJoueur($_POST['nom'], $_POST['mdp']);
    if ($joueur) {
        $_SESSION['joueur'] = $joueur;
        header('Location: selection.php');
    } else {
        $erreur = 'Nom ou mot de passe incorrect.';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <?php if (isset($erreur)): ?>
        <p><?php echo $erreur; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom" required><br>
        <label for="mdp">Mot de passe : </label>
        <input type="password" name="mdp" id="mdp" required><br>
        <input type="submit" name="submit" value="Se connecter">
    </form>
</body>
</html>