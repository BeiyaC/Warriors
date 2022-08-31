<?php

require_once __DIR__ . "/../base/BaseBattleField.php";
require_once "Warrior.php";


class BattleField extends BaseBattleField
{
    public static function createMyWarrior()
    {

        $weapon = new Weapon(1, 10);
        $weapon->imageUrl = "https://m.media-amazon.com/images/I/31agL1N1CEL.jpg";

        $warrior = new MarvelWarrior($GLOBALS['warriorName']);
        $warrior->imageUrl = "https://lumiere-a.akamaihd.net/v1/images/avengers-characterthumbnail-blackpanther_e647c782.jpeg?region=0%2C0%2C300%2C300";
        $warrior->weapon = $weapon;
        $warrior-> saveNew();

    }

    public static function createOtherWarrior()
    {

        $warrior = new PokemonWarrior('herbivore');
        $warrior->imageUrl = "https://www.pokebip.com/images/2022/199.png";
        $warrior->weapon = new Weapon(2, 20);
        $warrior->weapon ->imageUrl = "https://margxt.fr/wp-content/uploads/2018/12/Pokemon-Go-Plante.png";
        $warrior-> saveNew();
    }
}
