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

        public function menu(int $menu)
        {
            switch($menu) {
                case 0:
                    break;
                case 1:
                    break;
                case 2:
                    break;
                case 3:
                    break;
                default:

            }
        }

        public function start($game)
        {
            while($game == false) {

            }

        }

    }

?>