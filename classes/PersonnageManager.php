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
    class PersonnagesManager
    {

        private $conn;

        public function __construct($conn)
        {
            $this->conn = $conn;
        }

        public function enregistrerPersonnage($personnage)
        {
            $sql = "INSERT INTO personnage (nom, pointvie, type, degats) VALUES (?, ?, ?, ?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("siss", $personnage->nom, $personnage->pointvie, $personnage->type, $personnage->degats);
            $stmt->execute();
        }

        public function modifierPersonnage($nom, $personnage)
        {
            $sql = "UPDATE personnage SET nom = ?, pointvie = ?, type = ?, degats = ? WHERE nom = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("sisss", $personnage->nom, $personnage->pointvie, $personnage->type, $personnage->degats, $nom);
            $stmt->execute();
        }

        public function supprimerPersonnage($nom)
        {
            $sql = "DELETE FROM personnage WHERE nom = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("s", $nom);
            $stmt->execute();
        }

        public function selectionnerPersonnage($nom)
        {
            $sql = "SELECT * FROM personnage WHERE nom = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("s", $nom);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        }

        public function compterPersonnages()
        {
            $sql = "SELECT COUNT(*) as count FROM personnage";
            $result = $this->conn->query($sql);
            return $result->fetch_assoc()['count'];
        }

        public function getPersonnages()
        {
            $sql = "SELECT * FROM personnage";
            $result = $this->conn->query($sql);
            return $result->fetch_all(MYSQLI_ASSOC);
        }

        public function personnageExiste($nom)
        {
            $sql = "SELECT COUNT(*) as count FROM personnage WHERE nom = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("s", $nom);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc()['count'] > 0;
        }
    }



    ?>


</body>

</html>