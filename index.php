<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include('config/db.php');
    $manager = new PersonnagesManager($mysqlConnection);
    ?>


<form action='PersonnageManager.php' method='POST'>
    <label name="nom">
        <input type="text" name="nom" placeholder="nom du perso">
    <label name="type">
    <input type="text" name="nom" placeholder="nom du perso">
    <label name="pointvie">
    <input type="text" name="pv" placeholder="points de vie">
    <label name="degats">
    <input type="text" name="degats" placeholder="dégâts">

</form>
</body>



</html>