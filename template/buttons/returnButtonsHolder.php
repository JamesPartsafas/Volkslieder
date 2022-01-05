<?php

$buttonsFile = ROOT_DIR . 'template/buttons/returnButtons.php';

includeWithVariables(
    $buttonsFile, 
    array(
        "lang" => "en", 
        "return" => "Return",
        "print" => "Print"
    )
);

includeWithVariables(
    $buttonsFile, 
    array(
        "lang" => "fr", 
        "return" => "Retourner",
        "print" => "Imprimer"
    )
);

includeWithVariables(
    $buttonsFile, 
    array(
        "lang" => "de", 
        "return" => "Zurück",
        "print" => "Drucken"
    )
);