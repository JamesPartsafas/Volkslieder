<?php

include_once ROOT_DIR . 'includes/view.php';
include_once ROOT_DIR . 'template/variableTemplate.php';

include_once 'Controller.php';

class SongController extends Controller {

    private $whitelist;

    public function __construct($conn) {
        parent::__construct($conn);
        $this->whitelist = returnWhiteList();
    }

    public function index() {
        if (!in_array($_GET['dc'], $this->langCodes)) {
            $this->handleException();
        }
        
        $a = mysqli_real_escape_string($this->conn, $_GET['a']);
        $q = mysqli_real_escape_string($this->conn, $_GET['q']);

        if(!in_array($a, $this->whitelist)) {
            $this->handleException($_GET['dc']);
        }

        $stmt = $this->conn->prepare("SELECT title, content FROM $a WHERE link=?");
        $stmt->bind_param("s", $q);
        $stmt->execute() or $this->handleException($_GET['dc']);
        $result = $stmt->get_result() or $this->handleException($_GET['dc']);
        $row = $result->fetch_assoc();
        
        if(!mysqli_num_rows ($result)) {
            $this->handleException($_GET['dc']); //Redirect on broken "q" tags to homepage
        }

        $variables = array(
            "row" => $row,
            "table" => $a
        );

        view('song.php', $this->conn, $variables);
    }
}

function returnWhiteList() {
    include_once ROOT_DIR . 'includes/whitelist.php';
    return $whitelist;
}