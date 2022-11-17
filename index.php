<?php 

require 'functions.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


# add routes array, easier to add new routes, refactor code after.

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

function abort($code) {
    http_response_code($code);
    

    require "views/{$code}.php";
    
    die();
}

# if the key exists in the $routes array, require corresponding key within the array.

if (array_key_exists($uri, $routes)) {
require $routes[$uri];

} else {
    
    abort();

};


?>

