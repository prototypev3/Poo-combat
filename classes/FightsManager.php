<?php

class FightsManager
{
    public function __construct()
    {
    }

    public function fight(Hero $hero, Monster $monster)
    {
        $fightResults = [];

        do {
            $degats = $monster->hit($hero);
            $fightResults[] = $monster->getName() ." a frappé ".$hero->getName()." de ". $degats ." points de dégâts";

            if($hero->getHealthPoints() <= 0) {
                $fightResults[] = $hero->getName() . " est mort sous les coups du monstre";
                break;
            }

            $degats = $hero->hit($monster);
            $fightResults[] = $hero->getName() ." a frappé ".$monster->getName()." de ". $degats ." points de dégâts";
            
            if($monster->getHealthPoints() <= 0) {
                $fightResults[] = $monster->getName() . " est mort sous les coups du héro";
                break;
            }

        } while($monster->getHealthPoints() > 0);
        
        return $fightResults;
    }

    public function createMonster() : Monster
    {
        $randomMonsterNames = [
            "Frostcat",
            "Blightclaw",
            "Cavehand",
            "Abyssscream",
            "The Ancient Statue",
            "The Delirious Tumor",
            "The Thin Howler",
            "The Masked Dawn Buffalo",
            "The Hidden Ghost Leviathan",
            "The Long-Horned Predator Critter"
        ];

        return new Monster([
            "name" => $randomMonsterNames[array_rand($randomMonsterNames)],
            "health_points" => 100
        ]);
    }

    public function createMonsterclass() : Monster
    {
        $randomMonsterclass = [
            "oger",
            "wizard",
            "infantryman"
        ];
        return new Monsterclass([
            "class" => $randomMonsterclass[array_rand($randomMonsterclass)]
        ]);

    }
}