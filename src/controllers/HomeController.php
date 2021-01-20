<?php
namespace src\controllers;

use \core\Controller;


class HomeController extends Controller {

    public function index() {
        $this->render('home', ['nome' => 'Bonieky']);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
    }

    public function fotos(){
        //echo 'Fotos!';
        //puxo uma view
        $this->render('fotos');
        
    }

    public function foto($parametro){
        echo "Acessando a foto: ".$parametro['id'];
        //print_r($parametro);
    }

}