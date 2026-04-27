<?php
require '../core/Router.php';
require '../core/Container.php';

$router = new Router();

$router->get('/', [HomeController::class, 'index']);

$router->dispatch($_SERVER['REQUEST_URI']);