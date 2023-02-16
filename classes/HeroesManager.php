<?php

class HeroesManager
{
    private PDO $db; // Instance de PDO

    public function __construct(PDO $db)
    {
        $this->setDb($db);
    }

    public function add(Hero $hero)
    {
        $query = $this->db->prepare('INSERT INTO heroes (name) VALUES (:name)');
        $query->bindValue(':name', $hero->getName());
        $query->execute();

        $hero->hydrate([
            'id' => $this->db->lastInsertId()
        ]);
    }

    public function update(Hero $hero)
    {
        $query = $this->db->prepare('UPDATE heroes SET health_points = :health_points WHERE id = :id');
        $query->bindValue(':id', $hero->getId());
        $query->bindValue(':health_points', $hero->getHealthPoints());
        $query->execute();
    }

    public function find(int $heroId)
    {
        $query = $this->db->prepare('SELECT id,name, health_points FROM heroes WHERE id = :id');
        $query->bindValue(':id', $heroId);
        $query->execute();

        $donnees = $query->fetch(PDO::FETCH_ASSOC);

        if(!$donnees) {
            return null;
        }

        $hero = new Hero([
            'id' => $donnees["id"],
            'name' => $donnees["name"],
            'health_points' => $donnees["health_points"],
        ]);

        return $hero;
    }

    public function findAllAlive()
    {
        $query = $this->db->prepare('SELECT id,name,health_points FROM heroes WHERE health_points > 0');
        $query->execute();

        $heroRows = $query->fetchAll(PDO::FETCH_ASSOC);

        if(!$heroRows) {
            return [];
        }

        $heroes = [];

        foreach($heroRows as $heroRow) {
            $heroes[] = new Hero([
                'id' => $heroRow["id"],
                'name' => $heroRow["name"],
                'health_points' => $heroRow["health_points"],
            ]);
        }

        return $heroes;
    }

    /**
     * Get the value of db
     */ 
    public function getDb(): PDO
    {
        return $this->db;
    }

    /**
     * Set the value of db
     *
     * @return  self
     */ 
    public function setDb(PDO $db)
    {
        $this->db = $db;

        return $this;
    }
}
