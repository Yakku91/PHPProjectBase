<?php
use \MyVideo\Model\User;
use \MyVideo\Helper\Request;
use \MyVideo\Helper\Router;
use \MyVideo\Controller\PageController;

include __DIR__.'/../vendor/autoload.php';

$user = new User();

$request = new Request();
$path = $_SERVER['REQUEST_URI'];
$router = new Router();

$router->addRoute('/', [new PageController($request), 'showHomepage']);

$router->resolve($path);