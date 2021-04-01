<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'vendor/autoload.php';

require_once dirname(__FILE__).'/dao/BaseDao.class.php';

Flight::register('dao', 'BaseDao', ['users']);

Flight::route('/', function() {
    echo 'Welcome to my application.';
});

Flight::route('/users', function() {
    $users = Flight::dao()->get_all();
    Flight::json($users);
});

Flight::route('/users/@id', function($id) {
    echo 'You are currently looking at user '.$id;
});

Flight::route('/json', function() {
    Flight::json([
      "user_id" => 1,
      "username" => "Aldin",
      "email" => "aldin.kovacevic@ibu.edu.ba",
      "age" => 23
    ]);
});

Flight::start();
?>
