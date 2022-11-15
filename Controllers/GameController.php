<?php

    namespace App\Controllers;

    use App\Core\Form;
    use App\Core\Constantes;
    use App\Core\GameMethodes;
    use App\Models\GameModel;

    class GameController extends Controller
    {
        public function index()
        {
            $this->render('game/game_index', [], 'home', 'game');
        }

        public function start()
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
                    $game = new GameModel;

                    // ON HYDRATE
                    $game->setGame_user_id($user_id)
                         ->setGame_character($game_character)
                         ->setGame_name_character($game_character_name);

                    // ON ENREGISTRE
                    $game->create();

                    // REDIRECTION
                    $_SESSION['message'] = "Votre annonce a été enregistrée avec succès";
                    header('Location: /');
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

                $this->render('game/game_start', ['form' => $form->create()]);


            } else {
                // L'UTILISATEUR N'EST PAS CONNECTER
                $_SESSION['erreur'] = "Vous devez être connecté(e) pour accéder à cette page";
                header('Location: /users/login');
                exit;
            }
        }

        public function continue()
        {
            echo "continue";
        }

        public function end()
        {

        }

        public function score()
        {
            echo "score";
        }

    }

?>