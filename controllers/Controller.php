<?php
class Controller {

    protected $conn;
    protected $langCodes;

    public function __construct($conn) {
        $this->conn = $conn;
        $this->langCodes = array(
            'en',
            'fr',
            'de'
        );
    }

    public function handleException($lang = 'de') {
        header("Location: home?dc={$lang}");
    }
}