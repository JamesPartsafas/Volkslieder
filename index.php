<?php
include_once 'config.php';
include_once ROOT_DIR . "includes/dbh.inc.php";
include_once ROOT_DIR . 'template/variableTemplate.php';
include_once ROOT_DIR . "includes/logging.php";

include_once ROOT_DIR . 'controllers/HomeController.php';
include_once ROOT_DIR . 'controllers/Controller.php';

$requestedResource = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

if ($requestedResource === BASE_URL . 'home') {
    $controller = new HomeController($conn);
    $controller->index();
}
else {
    $controller = new Controller($conn);
    $controller->handleException();
}