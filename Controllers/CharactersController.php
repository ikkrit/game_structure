<?php

    namespace App\Controllers;

    use App\Models\CharactersModel;

    class CharactersController extends Controller
    {
        public function index()
        {
            $charactersModel = new CharactersModel;

            $characters = $charactersModel->findBy(['actif' => 1]);

            $this->render('characters/characters_index', compact('characters'), 'home', 'home');
        }

        public function charactersProfil(int $character_id)
        {
            $this->render('characters/characters_profil', [], 'home', 'characters');
        }

        public function charactersCreate()
        {
            
        }

        public function charactersDelete()
        {

        }
    }

?>