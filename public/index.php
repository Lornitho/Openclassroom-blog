<?php
require '../config/private.php';
require '../vendor/autoload.php';

session_start();
$router = new \App\config\Router();

$router->run();


