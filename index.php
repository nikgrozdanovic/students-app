<?php

use StudentsApp\School\Students;

require_once realpath('vendor/autoload.php');

$router = new \Bramus\Router\Router();

// Define routes
$router->get('/students/(\d+)', function($id) {
    echo $id;
});


// Run it!
$router->run('/');