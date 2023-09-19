<?php
// routes.php

// Define a base URL if your project is not in the root directory
$baseUrl = '/';

// Define your routes
$routes = [
    // Home Page
    $baseUrl => 'HomeController@index',
    $baseUrl . 'dashboard' => 'HomeController@dashboard',

    // Task Routes
    $baseUrl . 'tasks' => 'TaskController@index',
    $baseUrl . 'tasks/create' => 'TaskController@create',
    $baseUrl . 'tasks/edit' => 'TaskController@edit',

    // View Routes
    $baseUrl . 'login' => 'ViewController@login',
    $baseUrl . 'register' => 'ViewController@register',
    $baseUrl . 'create' => 'ViewController@create',

    // Authentication Routes
    $baseUrl . 'auth/login' => 'AuthController@login',
    $baseUrl . 'auth/register' => 'AuthController@register',
    $baseUrl . 'auth/logout' => 'AuthController@logout',
];

// Process the request
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Check if a category query parameter exists
if (isset($_GET['category'])) {
    // Append the category query to the URI for routing
    $uri .= '?category=' . $_GET['category'];
}

// Get the controller and action from the route
$route = isset($routes[$uri]) ? $routes[$uri] : null;
list($controller, $action) = explode('@', $route);

// Include the necessary controller file
$controllerFile = 'app/controllers/' . $controller . '.php';

var_dump($controllerFile);

if (file_exists($controllerFile)) {
    require_once $controllerFile;
} else {
    echo '404 - Controller not found';
    exit;
}

// Create an instance of the controller and call the action
if (class_exists($controller)) {
    $controllerInstance = new $controller();
    if (method_exists($controllerInstance, $action)) {
        $controllerInstance->$action();
    } else {
        echo '404 - Action not found';
    }
} else {
    echo '404 - Controller not found';
}
