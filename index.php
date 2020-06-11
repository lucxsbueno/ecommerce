<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;

$app = new Slim();

$app->config('debug', true);

# redireciona para a página inicial da loja
$app->get('/', function() {
    
	$page = new Page();

	$page->setTpl("index");

});

# redireciona para a página do admin
$app->get('/admin', function() {
    
	$page = new PageAdmin();

	$page->setTpl("index");

});

$app->run();

 ?>