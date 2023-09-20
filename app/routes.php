<?php include "./includes/functions.php" ?>;

<?php

$request = $_SERVER['REQUEST_URI'];
$baseDir = '/todo-list/';
$viewDir = '/views/';

switch ($request) {

    case '':
    case ($baseDir):
        require __DIR__ . $viewDir . 'index.php';
        break;

    case ($baseDir . 'signin'):
        require __DIR__ . $viewDir . 'index.php';
        break;

    case ($baseDir):
        require __DIR__ . $viewDir . 'index.php';
        break;

    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
