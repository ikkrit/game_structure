<?php

    namespace App\Models;

    class LocationsModel extends Model
    {

        protected $location_id;
        protected $location_time;
        protected $location_name;
        protected $enemy_id;
        
        
        public function __construct()
        {
            $this->table = 'locations';
        }


        public function getLocation_id()
        {
                return $this->location_id;
        }

        public function setLocation_id($location_id)
        {
                $this->location_id = $location_id;

                return $this;
        }

        public function getLocation_time()
        {
                return $this->location_time;
        }

        public function setLocation_time($location_time)
        {
                $this->location_time = $location_time;

                return $this;
        }

        public function getLocation_name()
        {
                return $this->location_name;
        }

        public function setLocation_name($location_name)
        {
                $this->location_name = $location_name;

                return $this;
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
    }

?>