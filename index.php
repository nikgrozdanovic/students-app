<?php

use StudentsApp\School\Student;

require_once realpath('vendor/autoload.php');

$router = new \Bramus\Router\Router();

// Define routes
$router->get('/test/students/(\d+)', function($id) {
    $students = new Student;

    echo $students->show($id);
});


// Run it!
$router->run('/');