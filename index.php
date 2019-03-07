<?php 
require 'vendor/autoload.php';
require 'core/bootstrap.php';

use App\Core \{
    Router,
    Request
};





// $router = new Router;

// require('routes.php');


// require $router->direct($uri);

Router::load('app/routes.php')->direct(Request::uri(), Request::method());
