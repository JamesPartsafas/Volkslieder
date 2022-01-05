<?php
//Entry point of application
//Parse request and choose controller

include_once 'config.php';
include_once ROOT_DIR . "includes/dbh.inc.php";
include_once ROOT_DIR . "includes/logging.php";

include_once ROOT_DIR . 'controllers/HomeController.php';
include_once ROOT_DIR . 'controllers/SongController.php';
include_once ROOT_DIR . 'controllers/Controller.php';

$requestedResource = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$requestedResource = str_replace(BASE_URL, '', $requestedResource);

switch ($requestedResource) {
    case 'home':
        $controller = new HomeController($conn);
        $controller->index();
        break;
    
    case 'song':
        $controller = new SongController($conn);
        $controller->index();
        break;

    default:
        $controller = new Controller($conn);
        $controller->handleException();
}