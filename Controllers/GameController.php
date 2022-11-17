<?php

    namespace App\Controllers;

    use App\Core\Form;
    use App\Core\Constantes;
    use App\Models\CharactersModel;
    use App\Models\GamesModel;
    use App\Models\LocationsModel;
    use App\Models\EnemyModel;

    class GameController extends Controller
    {
        public function index()
        {
            $this->render('game/game_index', [], 'home', 'game');
        }

        public function init()
        {
            // ON VERIFIE SI L'UTILISATEUR EST CONNECTER
            if(isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
                // L'UTILISATEUR EST CONNECTER

                $gameModel = new GamesModel;

                $game_user_id = strip_tags($_SESSION['user']['id']);

                $gameModel->setGame_user_id($game_user_id);

                $gameModel->create();

                $games = $gameModel->find($game_user_id, 'game_user_id');

                $characterModel = new CharactersModel;

                $characters = $characterModel->find(1, 'character_id');

                header('Location: /game/start/$games/$characters');

            } else {
                // L'UTILISATEUR N'EST PAS CONNECTER
                $_SESSION['erreur'] = "Vous devez être connecté(e) pour accéder à cette page";
                header('Location: /users/login');
                exit;
            }
        }

        public function start($games,$characters)
        {
            /*$this->render('game/game_start', ['games' => $games, 'characters' => $characters],'home', 'game');*/
            var_dump($games);
        }

        private function throw_dice()
        {
            $throw = rand(1,6);
            return $throw;
        }

        private function location()
        {
            $location_random = rand(1,6);

            $locationsModel = new LocationsModel;

            $location = $locationsModel->find($location_random,'zone_id');

            return $location;
        }

        private function enemy()
        {
            $enemy_random = rand(1,6);

            $enemyModel = new EnemyModel;
    
            $enemy = $enemyModel->find($enemy_random,'enemy_id');

            return $enemy;
        }

        public function startg()
        {
            $gameModel = new GamesModel;

            $location = $this->location();

            $enemy = $this->enemy();

            $games = [$location,$enemy];

            $this->render('game/game_start', ['games' => $games], 'home', 'game');
        }

        public function continue()
        {
            echo "continue";
        }

        public function end()
        {
            echo "fin de partie";
        }

        public function score()
        {
            echo "score";
        }

    }

?>