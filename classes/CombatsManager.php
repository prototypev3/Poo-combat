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

    class CombatsManager
    {

        private $combats = [];

        public function enregistrerCombat($combat)
        {
            $this->combats[] = $combat;
        }

        public function modifierCombat($index, $combat)
        {
            $this->combats[$index] = $combat;
        }

        public function supprimerCombat($index)
        {
            unset($this->combats[$index]);
        }

        public function getCombats()
        {
            return $this->combats;
        }

    }
    ?>
</body>

</html>