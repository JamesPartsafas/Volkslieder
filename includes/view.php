<?php
function view($fileName, $conn, $variables = array()) {
    $fileName = ROOT_DIR . "views/" . $fileName;
    $variables['conn'] = $conn;
    
    $innerContent = includeWithVariables($fileName, $variables, false);

    includeWithVariables('views/wrapper.php', array("innerContent" => $innerContent), true);
}