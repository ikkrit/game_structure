<?php

    namespace App\Models;

    class CharactersModel extends Model
    {
        protected $character_id;
        protected $character_name;
        protected $character_life;
        protected $character_weapon;
        protected $character_element;
        protected $character_description;
        protected $character_img;
        protected $character_back;
        protected $actif;


        public function __construct()
        {
            $this->table = 'characters';
        }


        public function getCharacter_id()
        {
                return $this->character_id;
        }

        public function setCharacter_id($character_id)
        {
                $this->character_id = $character_id;

                return $this;
        }

        public function getCharacter_name()
        {
                return $this->character_name;
        }

        public function setCharacter_name($character_name)
        {
                $this->character_name = $character_name;

                return $this;
        }

        public function getCharacter_life()
        {
                return $this->character_life;
        }

        public function setCharacter_life($character_life)
        {
                $this->character_life = $character_life;

                return $this;
        }

        public function getCharacter_weapon()
        {
                return $this->character_weapon;
        }

        public function setCharacter_weapon($character_weapon)
        {
                $this->character_weapon = $character_weapon;

                return $this;
        }

        public function getCharacter_element()
        {
                return $this->character_element;
        }

        public function setCharacter_element($character_element)
        {
                $this->character_element = $character_element;

                return $this;
        }

        public function getCharacter_description()
        {
                return $this->character_description;
        }

        public function setCharacter_description($character_description)
        {
                $this->character_description = $character_description;

                return $this;
        }

        public function getCharacter_img()
        {
                return $this->character_img;
        }

        public function setCharacter_img($character_img)
        {
                $this->character_img = $character_img;

                return $this;
        }

        public function getCharacter_back()
        {
                return $this->character_back;
        }

        public function setCharacter_back($character_back)
        {
                $this->character_back = $character_back;

                return $this;
        }

        public function getActif()
        {
                return $this->actif;
        }

        public function setActif($actif)
        {
                $this->actif = $actif;

                return $this;
        }
    }

?>