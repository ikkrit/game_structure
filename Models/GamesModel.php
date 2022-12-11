<?php

namespace App\Models;

use App\Core\Constants\ConstantsGameChapOne;

class GamesModel extends Model
{

        protected $game_id;
        protected $game_character;
        protected $game_location;
        protected $game_save;
        protected $create_at;
        protected $game_user_id;


        public function __construct()
        {
                $this->table = 'game';
        }


        public function chapitre_one(int $zone, int $choice)
        {
                if ($zone == 4) {

                        if ($choice == 1) {

                                $constants = [
                                        "title" => ConstantsGameChapOne::CHAP_01_TITLE_01,
                                        "good_choice" => ConstantsGameChapOne::CHAP_01_ZONE_4_GOOD_01,
                                        "present" => ConstantsGameChapOne::CHAP_01_INTRO_PRESENT_02,
                                        "choice_one" => ConstantsGameChapOne::CHAP_01_CHOICE_PRESENT_04,
                                        "choice_two" => ConstantsGameChapOne::CHAP_01_CHOICE_PRESENT_05,
                                        "choice_three" => ConstantsGameChapOne::CHAP_01_CHOICE_PRESENT_06,
                                ];

                                $page = "game_party";
                                $valid = true;

                        } elseif ($choice == 2) {

                                $constants = ConstantsGameChapOne::CHAP_1_BAD1;
                                $page = "game_lose";
                                $valid = false;

                        } elseif ($choice == 3) {

                                $constants = ConstantsGameChapOne::CHAP_1_BAD2;
                                $page = "game_lose";
                                $valid = false;

                        } else {

                                $constants = ConstantsGameChapOne::CHAP_1_ERROR;
                                $page = "game_lose";
                                $valid = false;
                        }
                } elseif ($zone == 3) {

                        if ($choice == 1) {

                                $constants = [
                                        [ "title_1" => ConstantsGameChapOne::CHAP_01_TITLE_01],
                                        [ "present_1" => ConstantsGameChapOne::CHAP_01_INTRO_PRESENT_01],
                                        [ "present_2" => ConstantsGameChapOne::CHAP_01_INTRO_PRESENT_02],
                                        [ "present_3" => ConstantsGameChapOne::CHAP_01_INTRO_PRESENT_03],
                                        [ "text_1" => ConstantsGameChapOne::CHAP_01_01],
                                        [ "text_2" => ConstantsGameChapOne::CHAP_01_02],
                                        [ "text_3" => ConstantsGameChapOne::CHAP_01_03],
                                        [ "text_4" => ConstantsGameChapOne::CHAP_01_04],
                                ];

                                $page = "game_party";
                                $valid = true;

                        } elseif ($choice == 2) {

                                $constants = ConstantsGameChapOne::CHAP_1_BAD1;
                                $page = "game_lose";
                                $valid = false;

                        } elseif ($choice == 3) {

                                $constants = ConstantsGameChapOne::CHAP_1_BAD2;
                                $page = "game_lose";
                                $valid = false;

                        } else {

                                $constants = ConstantsGameChapOne::CHAP_1_ERROR;
                                $page = "game_lose";
                                $valid = false;
                        }
                } elseif ($zone == 6) {

                        if ($choice == 1) {

                                $constants = [
                                        [ "title_1" => ConstantsGameChapOne::CHAP_01_TITLE_01],
                                        [ "present_1" => ConstantsGameChapOne::CHAP_01_INTRO_PRESENT_01],
                                        [ "present_2" => ConstantsGameChapOne::CHAP_01_INTRO_PRESENT_02],
                                        [ "present_3" => ConstantsGameChapOne::CHAP_01_INTRO_PRESENT_03],
                                        [ "text_1" => ConstantsGameChapOne::CHAP_01_01],
                                        [ "text_2" => ConstantsGameChapOne::CHAP_01_02],
                                        [ "text_3" => ConstantsGameChapOne::CHAP_01_03],
                                        [ "text_4" => ConstantsGameChapOne::CHAP_01_04],
                                ];

                                $page = "game_party";
                                $valid = true;

                        } elseif ($choice == 2) {

                                $constants = ConstantsGameChapOne::CHAP_1_BAD1;
                                $page = "game_lose";
                                $valid = false;

                        } elseif ($choice == 3) {

                                $constants = ConstantsGameChapOne::CHAP_1_BAD2;
                                $page = "game_lose";
                                $valid = false;

                        } else {

                                $constants = ConstantsGameChapOne::CHAP_1_ERROR;
                                $page = "game_lose";
                                $valid = false;
                        }


                } elseif ($zone == 7) {

                        if ($choice == 1) {

                                $constants = [
                                        [ "title_1" => ConstantsGameChapOne::CHAP_01_TITLE_01],
                                        [ "present_1" => ConstantsGameChapOne::CHAP_01_INTRO_PRESENT_02],
                                        [ "present_2" => ConstantsGameChapOne::CHAP_01_INTRO_PRESENT_03],
                                        [ "text_1" => ConstantsGameChapOne::CHAP_01_01],
                                        [ "text_2" => ConstantsGameChapOne::CHAP_01_02],
                                        [ "text_3" => ConstantsGameChapOne::CHAP_01_03],
                                        [ "text_4" => ConstantsGameChapOne::CHAP_01_04],
                                ];

                                $page = "game_party";
                                $valid = true;

                        } elseif ($choice == 2) {

                                $constants = ConstantsGameChapOne::CHAP_1_BAD1;
                                $page = "game_lose";
                                $valid = false;

                        } elseif ($choice == 3) {

                                $constants = ConstantsGameChapOne::CHAP_1_BAD2;
                                $page = "game_lose";
                                $valid = false;

                        } else {
                                $constants = ConstantsGameChapOne::CHAP_1_ERROR;
                                $page = "game_lose";
                                $valid = false;
                        }
                } else {
                        $constants = ConstantsGameChapOne::CHAP_1_ERROR;
                        $page = "game_lose";
                        $valid = false;
                }

                $chapitre_one = [$constants, $page, $valid];

                return $chapitre_one;
        }

        public function chapitre_two(int $zone, int $choice)
        {
                echo "two";
        }

        public function chapitre_three(int $zone, int $choice)
        {
                echo "three";
        }

        public function chapitre_four(int $zone, int $choice)
        {
                echo "four";
        }

        public function chapitre_final(int $zone, int $choice)
        {
                echo "final";
        }

        public function chapitre_select(string $chapitre_select, int $zone, int $choice)
        {
                switch ($chapitre_select) {
                        case "one":
                                $chapitre_select = $this->chapitre_one($zone, $choice);
                                break;
                        case "two":
                                $chapitre_select = $this->chapitre_two($zone, $choice);
                                break;
                        case "three":
                                $chapitre_select = $this->chapitre_three($zone, $choice);
                                break;
                        case "four":
                                $chapitre_select = $this->chapitre_four($zone, $choice);
                                break;
                        case "final";
                                $chapitre_select = $this->chapitre_final($zone, $choice);
                                break;
                        default:
                                $chapitre_select = $this->chapitre_one($zone, $choice);
                }

                return $chapitre_select;
        }

        // LANCER DE DES

        public function throw_dice()
        {
                $throw = rand(1, 6);
                return $throw;
        }

        // CHARACTER INIT

        public function battle_character($character_one, $character_two = null, $character_three = null)
        {
                $battle_character = array();

                $battle_character[] = $character_one;

                if ($character_two != null)
                        $battle_character[] = $character_two;
                if ($character_three != null)
                        $battle_character[] = $character_three;

                // RECUP DES CHARACTERS

                for ($i = 0; $i < count($battle_character); $i++) {
                        $characters[] = $battle_character[$i];
                }

                return $characters;
        }

        // ENEMY INIT

        public function battle_enemy($enemy_one, $enemy_two = null, $enemy_three = null)
        {
                $battle_enemy = array();

                $battle_enemy[] = $enemy_one;

                if ($enemy_two != null) {
                        $battle_enemy[] = $enemy_two;
                }
                if ($enemy_three != null) {
                        $battle_enemy[] = $enemy_three;
                }

                // RECUP DES ENEMY

                for ($i = 0; $i < count($battle_enemy); $i++) {
                        $enemy[] = $battle_enemy[$i];
                }

                return $enemy;
        }

        // CHARACTERS ACTIF

        public function battle_life($life)
        {

                if ($life > 0) {

                        $life = true;
                } else {

                        $life = false;
                }
                return $life;
        }

        public function battle_degats($attack, $life, $dice)
        {
                $degats = $life -= $attack * $dice;

                return $degats;
        }

        public function battle_turn($character, $enemy_one, $enemy_two, $enemy_three, $dice)
        {
                $character_status = [];
                $enemy_one_status = [];
                $enemy_two_status = [];
                $enemy_three_status = [];

                if ($this->battle_life($character->character_life)) {

                        if ($this->battle_life($enemy_one->enemy_life)) {

                                echo "<div class='battle__enemy-attack'>{$enemy_one->enemy_name} attaque <br></div>";

                                $character->character_life = $this->battle_degats($enemy_one->enemy_attack, $character->character_life, $dice);

                                echo "<div class='battle__character-degat'>{$character->character_name} à subie {$enemy_one->enemy_attack} points de degats de {$enemy_one->enemy_name} <br> il reste {$character->character_life} de point de vie <br>";

                                if ($this->battle_life($character->character_life)) {

                                        echo "<div class='battle__character-attack'>{$character->character_name} attaque <br></div>";

                                        $enemy_one->enemy_life = $this->battle_degats($character->character_attack, $enemy_one->enemy_life, $dice);

                                        echo "<div class='battle__enemy-degat'>{$enemy_one->enemy_name} à subie {$character->character_attack} points de degats de {$character->character_name} <br></div>";

                                        if(!$this->battle_life($enemy_one->enemy_life)) echo "<div class='battle__enemy-dead'>{$enemy_one->enemy_name} est mort <br></div>";

                                        $enemy_one_status = $enemy_one->enemy_life;

                                } else {

                                        echo "<div class='battle__character-dead'>{$character->character_name} est mort</div>";

                                        $character_status = $character->character_life;

                                        return [$character_status,$enemy_one_status,$enemy_two_status,$enemy_three_status];
                                }

                        } 

                        if ($this->battle_life($enemy_two->enemy_life)) {

                                echo "<div class='battle__enemy-attack'>{$enemy_two->enemy_name} attaque <br></div>";

                                $character->character_life = $this->battle_degats($enemy_two->enemy_attack, $character->character_life, $dice);

                                echo "<div class='battle__character-degat'>{$character->character_name} à subie {$enemy_two->enemy_attack} points de degats de {$enemy_two->enemy_name} <br> il reste {$character->character_life} de point de vie <br></div>";

                                if ($this->battle_life($character->character_life)) {

                                        echo "<div class='battle__character-attack'>{$character->character_name} attaque <br></div>";

                                        $enemy_two->enemy_life = $this->battle_degats($character->character_attack, $enemy_two->enemy_life, $dice);

                                        echo "<div class='battle__enemy-degat'>{$enemy_two->enemy_name} à subie {$character->character_attack} points de degats de {$character->character_name} <br></div>";

                                        if(!$this->battle_life($enemy_two->enemy_life)) echo "<div class='battle__enemy-dead'>{$enemy_two->enemy_name} est mort <br></div>";

                                        $enemy_two_status = $enemy_two->enemy_life;

                                } else {

                                        echo "<div class='battle__character-dead'>{$character->character_name} est mort</div>";

                                        $character_status = $character->character_life;

                                        return [$character_status,$enemy_one_status,$enemy_two_status,$enemy_three_status];

                                }

                        } else {

                                echo "<div class='battle__enemy-dead'>{$enemy_two->enemy_name} est mort</div>";

                                $enemy_two_status = $enemy_two->enemy_life;

                        }

                        if ($this->battle_life($enemy_three->enemy_life)) {

                                echo "<div class='battle__enemy-attack'>{$enemy_three->enemy_name} attaque <br></div>";

                                $character->character_life = $this->battle_degats($enemy_three->enemy_attack, $character->character_life, $dice);

                                echo "<div class='battle__character-degat'>{$character->character_name} à subie {$enemy_three->enemy_attack} points de degats de {$enemy_three->enemy_name} <br> il reste {$character->character_life} de point de vie <br></div>";

                                if ($this->battle_life($character->character_life)) {

                                        echo "<div class='battle__character-attack'>{$character->character_name} attaque <br></div>";

                                        $enemy_three->enemy_life = $this->battle_degats($character->character_attack, $enemy_three->enemy_life, $dice);

                                        echo "<div class='battle__enemy-degat'>{$enemy_three->enemy_name} à subie {$character->character_attack} points de degats de {$character->character_name} <br></div>";

                                        if(!$this->battle_life($enemy_three->enemy_life)) echo "<div class='battle__enemy-dead'>{$enemy_three->enemy_name} est mort <br></div>";

                                        $enemy_three_status = $enemy_one->enemy_life;

                                } else {

                                        echo "<div class='battle__character-dead'>{$character->character_name} est mort</div>";

                                        $character_status = $character->character_life;

                                        return [$character_status,$enemy_one_status,$enemy_two_status,$enemy_three_status];

                                }

                        } else {

                                echo "<div class='battle__enemy-dead'>{$enemy_three->enemy_name} est mort <br></div>";

                                $enemy_three_status = $enemy_three->enemy_life;

                        }

                } else {
                       
                        echo "<div class='battle__character-dead'>{$character->character_name} est mort</div>";

                        $character_status = $character->character_life;

                        return [$character_status,$enemy_one_status,$enemy_two_status,$enemy_three_status];
                }

                $character_status = $character->character_life;

                return [$character_status,$enemy_one_status,$enemy_two_status,$enemy_three_status];
        }


        // BATTLE

        public function battle_action($characters, $enemy, int $actions, int $dice)
        {
                $game = true;

                $character_one = $characters[0];
                $character_two = $characters[1];
                $character_three = $characters[2];

                $enemy_one = $enemy[0];
                $enemy_two = $enemy[1];
                $enemy_three = $enemy[2];

                while ($game === true) {


                        if ($actions == 1) {

                                $battle_one = $this->battle_turn($character_one, $enemy_one, $enemy_two, $enemy_three, $dice);

                                $battle_two = $this->battle_turn($character_two, $enemy_one, $enemy_two, $enemy_three, $dice);

                                $battle_three = $this->battle_turn($character_three, $enemy_one, $enemy_two, $enemy_three, $dice);

                                if($this->battle_life($enemy_one->enemy_life) 
                                        && $this->battle_life($enemy_two->enemy_life) 
                                        && $this->battle_life($enemy_three->enemy_life)) {
                                        
                                        $game = true;

                                } else {

                                        if($this->battle_life($character_one->character_life) 
                                                || $this->battle_life($character_two->character_life) 
                                                || $this->battle_life($character_three->character_life)) {

                                                $battle = true;
                                        
                                                $game = false;

                                        } else {

                                                $battle = false;

                                                $game = false;
                                        }
                                }

                        }
                        elseif ($actions == 2) { 

                                $character_one->character_life += 100;
                                $character_two->character_life += 100;
                                $character_three->character_life += 100;

                        } else {

                                $game = false;
                        }
                }

                return $battle;
        }


        public function getGame_id()
        {
                return $this->game_id;
        }

        public function setGame_id($game_id)
        {
                $this->game_id = $game_id;

                return $this;
        }

        public function getGame_character()
        {
                return $this->game_character;
        }

        public function setGame_character($game_character)
        {
                $this->game_character = $game_character;

                return $this;
        }

        public function getGame_location()
        {
                return $this->game_location;
        }

        public function setGame_location($game_location)
        {
                $this->game_location = $game_location;

                return $this;
        }

        public function getGame_save()
        {
                return $this->game_save;
        }

        public function setGame_save($game_save)
        {
                $this->game_save = $game_save;

                return $this;
        }

        public function getCreate_at()
        {
                return $this->create_at;
        }

        public function setCreate_at($create_at)
        {
                $this->create_at = $create_at;

                return $this;
        }

        public function getGame_user_id()
        {
                return $this->game_user_id;
        }

        public function setGame_user_id($game_user_id)
        {
                $this->game_user_id = $game_user_id;

                return $this;
        }
}
