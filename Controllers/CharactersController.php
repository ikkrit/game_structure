<?php

    namespace App\Controllers;

    class CharactersController extends Controller
    {
        public function index()
        {
            $this->render('home/home_index', [], 'home', 'home');
        }

        public function charactersProfil(int $characters_id)
        {
            $this->render('characters/characters_profil', [], 'home', 'home');
        }

        public function charactersLogin()
        {

        }

        public function charactersDelete()
        {

        }
    }

?>