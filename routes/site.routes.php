<?php

//Chamando classe Page
use App\Views;

//Cria a rota raíz
$app->get('/', function (){

    //chama a classe View
    $page = new Views();

    //Seta a View index na rota
    $page->setView('index');
});