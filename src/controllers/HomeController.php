<?php
namespace src\controllers;

use \core\Controller;


class HomeController extends Controller {

    public function index() {

        $posts = [
            ['titulo' => 'Titulo de teste 01', 'corpo'=>'Corpo de teste 01'],
            ['titulo' => 'Titulo de teste 02', 'corpo'=>'Corpo de teste 02'],
            ['titulo' => 'Titulo de teste 03', 'corpo'=>'Corpo de teste 03'],
            ['titulo' => 'Titulo de teste 04', 'corpo'=>'Corpo de teste 04'],
            ['titulo' => 'Titulo de teste 05', 'corpo'=>'Corpo de teste 05'],
            ['titulo' => 'Titulo de teste 06', 'corpo'=>'Corpo de teste 06'],
        ];
        $nome = 'Angela';
        $this->render('home', [
            'nome' => $nome,
            'idade' => '30',
            'posts' => $posts
            
        ]);
    }

    public function sobre() {
        $this->render('sobre');
    }

    public function sobreP($args) {
        print_r($args);
        echo "<br>Opa, ".$args['nome'];
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