<?php
require_once("../config/autoload.php");

$db = require_once("../config/db.php");

$manager = new HeroesManager($db);

if (isset($_POST["hero_id"])) {
    header("Location: /fight.php?hero_id=" . $_POST["hero_id"]);
    exit;
} else if (isset($_POST["name"])) {
    $hero = new Hero([
        "name" => $_POST["name"]
    ]);

    $manager->add($hero);

    header("Location: /fight.php?hero_id=" . $hero->getId());
    exit;
}

$existingHeroes = $manager->findAllAlive();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - TP Jeu de fight</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="/css/styles.css" rel="stylesheet">
</head>

<body>
    <?php
    $title = "TP Jeu de Fight";
    $subtitle = "Un jeu de fight au tour par tour en PHP pour apprendre les bases de la POO";
    require('partials/header.php');
    ?>

    <div class="container d-flex">
        <div class="card" style="width: 18rem;margin:0 auto;text-align:center;">
            <div class="card-body">
                <form method="post">
                    <h5 class="card-title">Créez votre hero</h5>
                    <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom de votre hero</label>
                        <input type="text" class="form-control" id="name" placeholder="Nom" name="name">
                    </div>

                    <button class="btn btn-primary btn-lg px-4 gap-3">Créer</button>
                </form>
            </div>
        </div>

        <?php foreach ($existingHeroes as $existingHero) : ?>
            <div class="card" style="width: 18rem;margin:0 auto;text-align:center;">
                <div class="card-body">

                    <form method="post">
                        <h5 class="card-title">Hero existant</h5>
                        <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
                        <div class="mb-3">
                            <img src="https://api.dicebear.com/5.x/adventurer/svg?seed=<?=$existingHero->getName()?>">
                            <p><?= $existingHero->getName() ?></p>
                            <p>❤️ <?= $existingHero->getHealthPoints() ?> HP</p>
                            <input type="hidden" name="hero_id" value="<?= $existingHero->getId() ?>">
                        </div>

                        <button class="btn btn-info btn-lg px-4 gap-3">Choisir</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
        </form>
    </div>
</body>

</html>