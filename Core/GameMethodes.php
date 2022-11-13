<?php

    namespace App\Core;

    interface Game
    {
        public static function throw_dice();
        public static function zone();
        public static function enemy();
        public static function end_game();
        public static function lose();

    }
?>

