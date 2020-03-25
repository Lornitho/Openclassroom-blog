<?php

require '../vendor/autoload.php';
require '../config/Router.php';
require '../config/Request.php';
require '../config/Parameter.php';
require '../config/Session.php';

session_start();
$router = new \App\config\Router();
$router->run();