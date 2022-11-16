<?php

    namespace App\Controllers;

    use App\Core\Form;
    use App\Core\Constantes;
    use App\Models\GamesModel;
    use App\Models\ZonesModel;
    use App\Models\EnemyModel;

    class GameController extends Controller
    {
        public function index()
        {
            $this->render('game/game_index', [], 'home', 'game');
        }

        public function create()
        {
            // ON VERIFIE SI L'UTILISATEUR EST CONNECTER
            if(isset($_SESSION['user']) && !empty($_SESSION['user']['id'])) {
                // L'UTILISATEUR EST CONNECTER
                // ON VERIFIE SI Le FORMULAIRE EST COMPLET
                if(Form::validate($_POST, ['game_character', 'game_character_name'])) {
                    // FORMULAIRE COMPLET
                    // PROTECTION FAILLES ...
                    $user_id = strip_tags($_SESSION['user']['id']);
                    $game_character = strip_tags($_POST['game_character']);
                    $game_character_name = strip_tags($_POST['game_character_name']);

                    // ON INSTANCIE NOTRE MODELE
                    $game = new GamesModel;

                    // ON HYDRATE
                    $game->setGame_user_id($user_id)
                         ->setGame_character($game_character)
                         ->setGame_name_character($game_character_name);

                    // ON ENREGISTRE
                    $game->create();

                    // REDIRECTION
                    $_SESSION['message'] = "Votre personnage a été enregistrée avec succès";
                    header('Location: /game/start');
                    exit;

                } else {

                    // LE FORMULAIRE EST INCOMPLET
                    $_SESSION['erreur'] = !empty($_POST) ? "Le formulaire est incomplet" : '';
                    $game_character = isset($_POST['game_character']) ? strip_tags($_POST['game_character']) : '';
                    $game_character_name = isset($_POST['game_character_name']) ? strip_tags($_POST['game_character_name']) : '';
                }

                $form = new Form;

                $form->startForm()
                     /*->addLabelFor('choice', 'Choix du personnage :')
                     ->addInput('text', 'game_character', [
                        'id' => 'choice', 
                        'class' => 'form-control',
                        'value' => $game_character
                    ])*/
                    ->addLabelFor('name', 'Nom du personnage :')
                     ->addInput('text', 'game_character_name', [
                        'id' => 'name', 
                        'class' => 'form-control',
                        'value' => $game_character_name
                    ])
                    ->addLabelFor('choice', 'Class du personnage :')
                    ->addSelect('game_character',
                        ['1' => 'Guerrier', '2' => 'Archer', '3' => 'Sorcier'],[
                        'class' => 'form-select', 
                        'id' => 'choice',
                        'value' => $game_character
                    ])
                     ->addButton('Commencer', ['type' => 'submit','class' => 'btn btn-primary'])
                     ->endForm();

                $this->render('game/game_create', ['form' => $form->create()],'home', 'game');


            } else {
                // L'UTILISATEUR N'EST PAS CONNECTER
                $_SESSION['erreur'] = "Vous devez être connecté(e) pour accéder à cette page";
                header('Location: /users/login');
                exit;
            }
        }

        private function throw_dice()
        {
            $throw = rand(1,6);
            return $throw;
        }

        private function zone()
        {
            $zone_random = rand(1,6);

            $zonesModel = new ZonesModel;

            $zone = $zonesModel->find($zone_random,'zone_id');

            return $zone;
        }

        private function enemy()
        {
            $enemy_random = rand(1,6);

            $enemyModel = new EnemyModel;
    
            $enemy = $enemyModel->find($enemy_random,'enemy_id');

            return $enemy;
        }

        public function start()
        {
            $gameModel = new GamesModel;

            $zone = $this->zone();

            $enemy = $this->enemy();

            $games = [$zone,$enemy];

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