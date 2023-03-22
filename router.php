<?php

$root = $config['root'];
$uri = $_SERVER['REQUEST_URI'];

$routes = [
    $root.'/' => 'controllers/index.php',
    $root.'/?notes' => 'controllers/notes.php',
    $root.'/?contact' => 'controllers/contact.php'
];

if (array_key_exists($uri, $routes)){
    include($routes[$uri]);
}
else{
    http_response_code(404);
    include('views/404.php');
}

?>