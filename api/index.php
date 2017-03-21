<?php

require 'Slim/Slim.php';

require_once("Slim/includes/RemoteAddress.php");

require_once("Slim/includes/class.Conexion.BD.php");

require_once("Slim/config/parametros.php");

require_once("Slim/includes/MessageHandler.php");

require_once('registerUser.php');

session_cache_limiter(false);
session_start();
$app = new Slim();

//$app = new Slim();
/* $app = new Slim((['debug'=>true,
  'settings' => [
  'displayErrorDetails' => true
  ]
  ])); */


$app->post('/add_user', 'registerUser');
$app->run();
