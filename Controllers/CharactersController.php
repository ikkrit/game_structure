<?php

    namespace App\Controllers;

    use App\Models\CharactersModel;

    class CharactersController extends Controller
    {
        public function index()
        {
            $charactersModel = new CharactersModel;

            $characters = $charactersModel->findBy(['actif' => 1]);

            $this->render('characters/characters_index', compact('characters'), 'home', 'characters');
        }

        public function profil(int $character_id)
        {
            // INSTANCE MODEL
            $charactersModel = new CharactersModel;
            // CHERCHER 1 ANNONCES
            $characters = $charactersModel->find($character_id,'character_id');
            // ENVOIE A LA VUE
            $this->render('characters/characters_profil', compact('characters'), 'home', 'characters');
        }

        public function charactersCreate()
        {
            
        }

        public function charactersDelete()
        {

        }
    }

?>