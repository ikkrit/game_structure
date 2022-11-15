<?php

    namespace App\Models;

    class ZonesModel extends Model
    {

        protected $zone_id;
        protected $zone_name;
        protected $zone_description;
        protected $enemy_id;
        
        
        public function __construct()
        {
            $this->table = 'zone';
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

        public function getZone_name()
        {
                return $this->zone_name;
        }

        public function setZone_name($zone_name)
        {
                $this->zone_name = $zone_name;

                return $this;
        }

        public function getZone_description()
        {
                return $this->zone_description;
        }

        public function setZone_description($zone_description)
        {
                $this->zone_description = $zone_description;

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