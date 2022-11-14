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
            echo "start";
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