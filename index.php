<?php

//Auto Load
require_once ("lib/autoload.php");

//Chamando o Slim
use Slim\Slim;
$app = new Slim();

// Ativar o debug
$app->config('debug', true);

// Chamando os arquivos de rotas
require_once ("routes/admin.routes.php");
require_once ("routes/site.routes.php");

// Executar o app
$app->run();