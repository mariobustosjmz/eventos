<?php

if (!isset($_SESSION)) {
	session_start();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

require __DIR__ . '/../vendor/autoload.php';

//instancia de la app
$app = new \Core\App;

//lanzamos la app
$app->render();