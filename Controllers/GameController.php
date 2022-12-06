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

        public function choice(string $chapitre,int $zone, int $choice)
        {
            $choice_chapitre = strip_tags($chapitre);
            $choice_zone = intval(strip_tags($zone));
            $choice = intval(strip_tags($choice));

            $gameModel = new GamesModel;
            
            $chapitre_choice = $gameModel->chapitre_select($choice_chapitre, $choice_zone, $choice);
        
            $this->render("game/$chapitre_choice[1]", ['party' => $chapitre_choice[0]], 'home', 'game');
        }

        public function battle(int $zone)
        {
            $zone = strip_tags($zone);

            $enemy = new EnemyModel;

            $enemy_random1 = $enemy->enemy($zone);
            $enemy_random2 = $enemy->enemy($zone);
            $enemy_random3 = $enemy->enemy($zone);
            

            $characters = new CharactersModel;

            $character_player1 = $characters->find(1, 'character_id');
            $character_player2 = $characters->find(2, 'character_id');
            $character_player3 = $characters->find(3, 'character_id');

            $gameModel = new GamesModel;


            $battle_characters = $gameModel->battle_character($character_player1,$character_player2,$character_player3);
            
            $battle_enemy = $gameModel->battle_enemy($enemy_random1, $enemy_random2, $enemy_random3);

            $action = $gameModel->battle_action($battle_characters,$battle_enemy,1,$gameModel->throw_dice());

            if($action) {

                $this->render('game/game_party', [], 'home', 'game');

            } else {

                $this->render('game/game_lose', [], 'home', 'game');
            }



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