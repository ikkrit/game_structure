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
            if($zone == 1) {

                if($choice == 1) {
                        $constants = ConstantsGameChapOne::CHAP_01_01;
                        $page = "game_party";
                } elseif($choice == 2) {
                        $constants = ConstantsGameChapOne::CHAP_1_BAD1;
                        $page = "game_lose";
                } elseif($choice == 3) {
                        $constants = ConstantsGameChapOne::CHAP_1_BAD2;
                        $page = "game_lose";
                } else {
                        $constants = ConstantsGameChapOne::CHAP_1_ERROR;
                        $page = "game_lose";
                }
            }
            elseif($zone == 2) {

                if($choice == 1) {
                        $constants = ConstantsGameChapOne::CHAP_01_01;
                        $page = "game_party";
                } elseif($choice == 2) {
                        $constants = ConstantsGameChapOne::CHAP_1_BAD1;
                        $page = "game_lose";
                } elseif($choice == 3) {
                        $constants = ConstantsGameChapOne::CHAP_1_BAD2;
                        $page = "game_lose";
                } else {
                        $constants = ConstantsGameChapOne::CHAP_1_ERROR;
                        $page = "game_lose";
                }
            } 
            elseif($zone == 3) {

                if($choice == 1) {
                        $constants = ConstantsGameChapOne::CHAP_01_01;
                        $page = "game_party";
                } elseif($choice == 2) {
                        $constants = ConstantsGameChapOne::CHAP_1_BAD1;
                        $page = "game_lose";
                } elseif($choice == 3) {
                        $constants = ConstantsGameChapOne::CHAP_1_BAD2;
                        $page = "game_lose";
                } else {
                        $constants = ConstantsGameChapOne::CHAP_1_ERROR;
                        $page = "game_lose";
                }
                
            } else {
                $constants = ConstantsGameChapOne::CHAP_1_ERROR;
                $page = "game_lose";
            }

            $chapitre_one = [$constants,$page];

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
            switch($chapitre_select) {
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
            $throw = rand(1,6);
            return $throw;
        }

        // CHARACTER INIT

        public function battle_character($character_one, $character_two = null, $character_three = null)
        {
            $battle_character = array();

            $battle_character[] = $character_one;

            if($character_two != null)
                $battle_character[] = $character_two;
            if($character_three != null)
                $battle_character[] = $character_three;

            // RECUP DES CHARACTERS

            for($i = 0; $i < count($battle_character); $i++) {
                    $characters[] = $battle_character[$i];
            }

            return $characters;
        }

        // ENEMY INIT

        public function battle_enemy($enemy_one, $enemy_two = null, $enemy_three = null)
        {
            $battle_enemy = array();

            $battle_enemy[] = $enemy_one;

            if($enemy_two != null) {$battle_enemy[] = $enemy_two;}
            if($enemy_three != null) {$battle_enemy[] = $enemy_three;}

            // RECUP DES ENEMY

            for($i = 0; $i < count($battle_enemy); $i++) {
                $enemy[] = $battle_enemy[$i];
            }

            return $enemy;
        }

        public function degats($character, $enemy, int $actions, int $dice )
        {
                if($actions == 1) {
                        $action = $enemy->enemy_attack - ($character->character_life * $dice);
                } else {
                        $action = $character->character_attack - ($enemy->enemy_attack * $dice);
                }

                return $action;
                
        }

        public function battle_action($character_battle, $enemy_battle)
        {
                
                // BOUCLE DU COMBAT

                // CHARACTERS
                $battle_order_characters = $character_battle[rand(0,count($character_battle)-1)];

                // ENEMY
                $battle_order_enemy = $enemy_battle[rand(0,count($enemy_battle)-1)];


                $battle = false;

                while($battle == false) {

                    if($battle_order_characters->character_life > 0) {
                        if($battle_order_enemy->enemy_life > 0) {
                            echo "<div class='battle__start battle__box'>
                                        {$battle_order_characters->character_name} Attaque {$battle_order_enemy->enemy_name}
                                </div>";
                            echo "<div class='battle__action battle__box'>
                                        {$battle_order_enemy->enemy_name} reçois {$battle_order_enemy->enemy_life} de degats
                                </div>";

                            die;
                        }
                    }
                    /*while(($enemy[0]->enemy_life) > 0) {
                        $enemy[0]->enemy_attack -= $characters[0]->character_life;
                            echo "<div class 'battle_box'>{$characters[0]->character_name} perd {$characters[0]->character_life} de point de vie</div>";
                    }
                        
                    echo "<div class 'battle_box'>{$characters[0]->character_name} perd {$characters[0]->character_life} de point de vie</div>";*/
                }
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

?>