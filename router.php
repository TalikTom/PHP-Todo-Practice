<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


# add routes array, easier to add new routes, refactor code after.

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];



# if the key exists in the $routes array, require corresponding key within the array.


function routeToController($uri, $routes) {
if (array_key_exists($uri, $routes)) {
require $routes[$uri];

} else {
    
    abort();

};

};


#dynamic function with 404 as default value.

function abort($code = 404) {
    http_response_code($code);
    

    require "views/{$code}.php";
    
    die();
}

routeToController($uri, $routes);