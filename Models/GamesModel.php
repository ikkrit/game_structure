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

        public function throw_dice()
        {
            $throw = rand(1,6);
            return $throw;
        }

        public function battle($character_battle, $enemy_battle)
        {
            $character_name = $character_battle->character_name;
            $character_point = $character_battle->character_life;

            $enemy_name = $enemy_battle->enemy_name;
            $enemy_point = $enemy_battle->enemy_life;

            while(($character_point > 1 ) || $enemy_point > 1) {
                echo "<div class 'battle_box'>$character_name à $character_point de point de vie</div>";
                $character_point -= 20;
                
                $enemy_point -= 20;
               
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