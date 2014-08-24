<?php

use Cake\Routing\Router;

Router::connect(
	'/users/:action/*',
	['plugin' => 'users', 'controller' => 'users'],
	['routeClass' => 'InflectedRoute']
);
Router::prefix('admin', function($routes) {
	$routes->connect(
		'/users/login',
		['plugin' => 'users', 'controller' => 'users', 'action' => 'login'],
		['routeClass' => 'InflectedRoute']
	);
	$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'InflectedRoute']);
	$routes->connect('/:controller/:action/*', [], ['routeClass' => 'InflectedRoute']);
});
