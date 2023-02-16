<?php

class Hero
{
    private int $id;
    private string $name;
    private int $health_points;
    private string $type;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
    }

    /**
     * Réduit les points de vie du hero et retourne les dégâts
     */
    public function hit(Monster $monster): int
    {
        $damage = rand(0,50);

        $monster->setHealthPoints($monster->getHealthPoints() - $damage);

        return $damage;
    }

    public function hydrate(array $donnees)
    {
        if(isset($donnees["id"])) {
            $this->setId($donnees["id"]);
        }
        if(isset($donnees["name"])) {
            $this->setName($donnees["name"]);
        }
        if(isset($donnees["health_points"])) {
            $this->setHealthPoints($donnees["health_points"]);
        }
        if(isset($donnees["type"])) {
            $this->settype($donnees["type"]);
        }
    }

    /**
     * Get the value of id
     */ 
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId(int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of health_points
     */ 
    public function getHealthPoints()
    {
        return $this->health_points;
    }

    /**
     * Set the value of health_points
     *
     * @return  self
     */ 
    public function setHealthPoints($health_points)
    {
        $this->health_points = $health_points;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
