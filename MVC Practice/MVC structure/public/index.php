<?php
require_once __DIR__.'/../vendor/autoload.php'; 

use \app\controllers\AuthController;
use \app\controllers\SiteController;
use \app\core\App;

$app = new App(dirname(__DIR__));


$app->router->get('/', [SiteController::class, 'home']);
$app->router->get('/contact', [SiteController::class,'contact']);
$app->router->post('/contact', [SiteController::class,'handleConntact']);


$app->router->get('/login', [AuthController::class,'login']);
$app->router->post('/login', [AuthController::class,'login']);
$app->router->get('/register', [AuthController::class,'register']);
$app->router->post('/register', [AuthController::class,'register']);

$app->run();