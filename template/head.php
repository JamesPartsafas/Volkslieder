<?php
    function renderHead($titleArg, $descriptionArg) {
        if (!isset($title)) {
            $title = $titleArg;
        }
        else {
            $title = "Volkslieder";
        }

        if (!isset($description)) {
            $description = $descriptionArg;
        }
        else {
            $description = "Historic German Songs";
        }
        
        include_once 'headcontent.php';
    }
