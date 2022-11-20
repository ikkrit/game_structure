<?php

    namespace App\Controllers;

    use App\Core\Form;
    use App\Core\Constants;
    use App\Core\Constants\ConstantsGameChapOne;
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

                header('Location: /game/start/4');

            } else {
                // L'UTILISATEUR N'EST PAS CONNECTER
                $_SESSION['erreur'] = "Vous devez être connecté(e) pour accéder à cette page";
                header('Location: /users/login');
                exit;
            }
        }


        public function start(int $location_id = 4)
        {
            /*if(gettype($location_id) != )*/

            if($location_id < 1 || $location_id > 6) {$location_id = 4;} 

                if(isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {

                    $game_user_id = strip_tags($_SESSION['user']['id']);
    
                    $gameModel = new GamesModel;
    
                    $games = $gameModel->find($game_user_id, 'game_user_id');
    
                    $characterModel = new CharactersModel;
    
                    $characters = $characterModel->findBy(['actif' => 1]);
    
                    $locationsModel = new LocationsModel;
    
                    $locations = $locationsModel->location($location_id);
    
                    $this->render('game/game_start', compact('characters','locations'), 'home', 'game');
    
                } else {
                    // L'UTILISATEUR N'EST PAS CONNECTER
                    $_SESSION['erreur'] = "Vous devez être connecté(e) pour accéder à cette page";
                    header('Location: /users/login');
                    exit;
                }
            
        }

        public function choice(string $chapitre,int $choice)
        {
            $gameModel = new GamesModel;
            $page = $gameModel->page_select();
            $page = 
            $constants = ConstantsGameChapOne::CHAP_1_BAD1;
            $this->render("game/$page", ['party' => $constants], 'home', 'game');
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