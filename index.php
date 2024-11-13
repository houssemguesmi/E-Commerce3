<?php
include_once 'functions.php';
$routes = include_once 'routes.php';

session_start();

run($_SERVER['REQUEST_URI'], $routes);