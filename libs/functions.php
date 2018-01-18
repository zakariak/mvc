<?php

/**
* Global functions
*/

function getDbConnection() {
  static $connection = null;

  if($connection !== null) {
    return $connection;
  }

  $host = 'localhost';
  $dbname = 'mvc';
  $username = 'root';
  $password = '';

  try {
    $connection = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
  } catch (PDOException $e) {
    throw new Exception('connection failed:' , $e->getMessage());
  }
  return $connection;
}

function loadView($view, $vars = []) {
  extract($vars);
  include APP_PATH . '/views/' .  $view . '.php';
  // var_dump($age);
}

?>
