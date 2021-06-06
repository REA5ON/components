Routing
=
```php
request -> .htaccess -> public/index.php -> controllers/...php
                                         \
                                           404.php 
```
Installation:
-
Step 1:
-
>Copy the contents of the folder to the root of project

Step 2:
-
> Go to public/index.php and add new key => value in array. Where key - it's will you enter in the address bar,
                                                           value - link to the file


```php
<?php

$routes = [
    //here you register new controllers
    "/" => '../controllers/homepage.php',
];

$route = $_SERVER['REQUEST_URI'];

if (array_key_exists($route, $routes)) {
    include $routes[$route]; exit;
} else {
    echo "You can set here link for 404 page:)";
}
```
Step 3:
-
>Create new controllers. Register new controllers in index.php. 

