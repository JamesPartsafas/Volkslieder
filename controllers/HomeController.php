<?php

include_once ROOT_DIR . 'includes/view.php';
include_once 'Controller.php';

class HomeController extends Controller {

    function __construct($conn) {
        parent::__construct($conn);
    }

    function index() {
        if (!in_array($_GET['dc'], $this->langCodes)) {
            $this->handleException();
        }

        view('index.php', $this->conn);
    }
}