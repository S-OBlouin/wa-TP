<?php

class ControllerHome{

    public function index(){

      $data =['welcome' => 'Welcome!'];
      twig::render("home-index.php", $data);

    }

    public function error(){
        twig::render("home-error.php");
    }
}