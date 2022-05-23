<?php
use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

$routes->setRouteClass(DashedRoute::class);



$routes->scope('/', function (RouteBuilder $builder) {
    $builder->connect('/', ['controller' => 'Pages', 'action' => 'index']);
    $builder->connect('/start', ['controller' => 'Articles', 'action' => 'dashboard']);
    $builder->connect('/logout', ['controller' => 'Users', 'action' => 'logout']);
   // $builder->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    // Add this
    // New route we're adding for our tagged action.
    // The trailing `*` tells CakePHP that this action has
    // passed parameters.
    $builder->scope('/articles', function (RouteBuilder $builder) {
        $builder->connect('/tagged/*', ['controller' => 'Articles', 'action' => 'tags']);
    });

    $builder->fallbacks();
});
