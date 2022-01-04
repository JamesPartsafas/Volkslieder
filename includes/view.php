<?php
function view($fileName, $conn) {
    $fileName = ROOT_DIR . "views/" . $fileName;
    
    $innerContent = includeWithVariables($fileName, array("conn" => $conn), false);

    includeWithVariables('views/wrapper.php', array("innerContent" => $innerContent), true);
}