<?php

use App\ViewsAdmin;

//Cria uma rota chamada /admin/dashboard
$app->get('/admin/dashboard', function (){

    //chamando a classe ViewAdmin
    $page = new ViewsAdmin();

    //Definindo a view pra essa rota
    $page->setView("index");
});


