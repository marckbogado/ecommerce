<?php 

require_once("vendor/autoload.php");

use \Slim\Slim; //namespace do vendor
use \Hcode\Page; //namespace do vendor
use \Hcode\PageAdmin; //namespace do vendor

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page(); //vai chamar o construct e adicionar o header na página
	$page->setTpl("index");//vai adicionar o index
	
	//ao chegar na próxima linha ele limpa a memória e chama o destruct, incluindo o footer
});

//segunda rota
$app->get('/admin', function() {
    
	$page = new PageAdmin(); //vai chamar o construct e adicionar o header na página
	$page->setTpl("index");//vai adicionar o index
	
	//ao chegar na próxima linha ele limpa a memória e chama o destruct, incluindo o footer
});

$app->run();

 ?>