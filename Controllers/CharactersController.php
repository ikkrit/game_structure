<?php

    namespace App\Controllers;

    class CharactersController extends Controller
    {
        public function index()
        {
            $this->render('home/home_index', [], 'home', 'home');
        }
    }

?>