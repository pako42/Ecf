<?php

require('src/controller/HomeController.php');
require('src/controller/AddMovieController.php');
require('src/controller/ListMoviesController.php');
require('src/controller/SearchMoviesController.php');
require('src/model/Model.php');
require('src/service/DbAcces.php');


$page = filter_input (INPUT_GET, "page");

$route = array (
    "home"          => HomeController::class,
    "addMovie"      => AddMovieController::class,
    "listMovies"    => ListMoviesController::class,
    "searchMovies"  => SearchMoviesController::class
);

foreach ($route as $routeValue => $className) {

    if ($page === $routeValue) {

        $controller = new $className;
        $controller ->manage();
        break;
    }
}

if(!isset($controller)) {

    $controller = new HomeController();
    $controller->manage();
}