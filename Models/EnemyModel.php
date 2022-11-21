<?php

    namespace App\Models;

    class EnemyModel extends Model
    {

        protected $enemy_id;
        protected $enemy_name;
        protected $enemy_life;
        protected $zone_id;

        public function __construct()
        {
            $this->table = 'enemy';
        }

        public function enemy(int $locations)
        {
            $enemy_locations = $this->findBy(['zone_id' => $locations]);

            $enemy_random = array_rand($enemy_locations);

            $enemy = $this->find($enemy_random, 'enemy_id');

            return $enemy;
        }


        public function getEnemy_id()
        {
                return $this->enemy_id;
        }

        public function setEnemy_id($enemy_id)
        {
                $this->enemy_id = $enemy_id;

                return $this;
        }

        public function getEnemy_name()
        {
                return $this->enemy_name;
        }

        public function setEnemy_name($enemy_name)
        {
                $this->enemy_name = $enemy_name;

                return $this;
        }

        public function getEnemy_life()
        {
                return $this->enemy_life;
        }

        public function setEnemy_life($enemy_life)
        {
                $this->enemy_life = $enemy_life;

                return $this;
        }

        public function getZone_id()
        {
                return $this->zone_id;
        }

        public function setZone_id($zone_id)
        {
                $this->zone_id = $zone_id;

                return $this;
        }
    }

?>