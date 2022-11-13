<?php

    namespace App\Models;

    class GameModel extends Model
    {
        

        public function __construct()
        {
            $this->table = 'game';
        }

    
        protected $game_id;
        protected $game_character;
        protected $game_zone;
        protected $game_point;
        protected $game_score;
        protected $user_id;


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

        public function getGame_zone()
        {
                return $this->game_zone;
        }

        public function setGame_zone($game_zone)
        {
                $this->game_zone = $game_zone;

                return $this;
        }

        public function getGame_point()
        {
                return $this->game_point;
        }

        public function setGame_point($game_point)
        {
                $this->game_point = $game_point;

                return $this;
        }

        public function getGame_score()
        {
                return $this->game_score;
        }

        public function setGame_score($game_score)
        {
                $this->game_score = $game_score;

                return $this;
        }

        public function getUser_id()
        {
                return $this->user_id;
        }

        public function setUser_id($user_id)
        {
                $this->user_id = $user_id;

                return $this;
        }
    }

?>