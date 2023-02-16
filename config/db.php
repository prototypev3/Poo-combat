
    <?php
    try {


        $mysqlConnection = new PDO(
            'mysql:host=localhost;
            dbname=minijeu;
            charset=utf8',
            'root',
            ''
        );
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    ?>