<?php

require_once 'vendor/autoload.php';

Flight::route('/', function() {
    echo 'hello world!';
});

Flight::route('/users', function() {
    echo 'This page display users!';
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
