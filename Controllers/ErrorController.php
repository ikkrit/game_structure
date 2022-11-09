<?php

    namespace App\Controllers;

    class ErrorController extends Controller
    {   
        public function index()
        {
            $this->render('error/error', [], 'main','error');
        }
    }

?>