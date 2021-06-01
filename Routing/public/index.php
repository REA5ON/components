<?php

/*
You can add new key=>value in array[],
where:
key = it's will you enter in the address bar
value = link to the file
*/

$routes = [
    "/" => '../controllers/homepage.php',
];

$route = $_SERVER['REQUEST_URI'];

if (array_key_exists($route, $routes)) {
    include $routes[$route]; exit;
} else {
    echo "You can set here link for 404 page:)";
}
