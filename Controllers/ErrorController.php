<?php

    namespace App\Controllers;

    class ErrorController extends Controller
    {   
        public function index()
        {
            $this->render('main', [], '404','404');
        }
    }

?>