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
    try {


        $mysqlConnection = new PDO(
            'mysql:host=localhost;
     dbname=combat;
     charset=utf8',
            'root',
            ''
        );
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    ?>
</body>

</html>