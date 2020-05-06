<?php
session_start();
require '../config/private.php';
require '../vendor/autoload.php';

$router = new \App\config\Router();

$router->run();
?>


