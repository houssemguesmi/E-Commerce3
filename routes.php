<?php
return [
    '/' => function () {
        include 'home.php';
    },
    '/login' => function () {
        include 'login.php';
    },
    '/signup' => function () {
        include 'signup.php';
    },
    '/products' => function () {
        include 'products.php';
    }
];

