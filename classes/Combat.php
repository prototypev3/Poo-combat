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
    include('../db.php');

    class Combat
    {
        private static $combatCounter = 0;
        private $id;
        private $characters;

        public function __construct($characters)
        {
            $this->id = ++self::$combatCounter;
            $this->characters = $characters;
        }
    }
    ?>




</body>

</html>