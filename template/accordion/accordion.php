<div class="content adjust">
    <div class="accordion" id="song-list">
        <?php

            $elementFile = ROOT_DIR . 'template/accordion/accordionElement.php';

            includeWithVariables(
                $elementFile,
                array(
                    "position" => "One",
                    "table" => "song_1200", 
                    "conn" => $conn,
                    "en" => "Middle Ages through the German Renaissance (~1200-1600)",
                    "fr" => "Du Moyen Âge à la Renaissance allemande (~1200-1600)",
                    "de" => "Mittelalter bis zur deutschen Renaissance (~1200-1600)"
                )
            ); 

            includeWithVariables(
                $elementFile,
                array(
                    "position" => "Two",
                    "table" => "song_1600", 
                    "conn" => $conn,
                    "en" => "Early Modern Germany (1600-1815)",
                    "fr" => "Début des temps modernes (1600-1815)",
                    "de" => "Deutschland der frühen Neuzeit (1600-1815)"
                )
            ); 

            includeWithVariables(
                $elementFile,
                array(
                    "position" => "Three",
                    "table" => "song_1815", 
                    "conn" => $conn,
                    "en" => "Unification Period (1815-1871)",
                    "fr" => "Période d'unification (1815-1871)",
                    "de" => "Deutsche Einigung (1815-1871)"
                )
            ); 

            includeWithVariables(
                $elementFile,
                array(
                    "position" => "Four",
                    "table" => "song_1871", 
                    "conn" => $conn,
                    "en" => "The German Empire (1871-1918)",
                    "fr" => "L'Empire allemand (1871-1918)",
                    "de" => "Das Deutsche Kaiserreich (1871-1918)"
                )
            );

            includeWithVariables(
                $elementFile,
                array(
                    "position" => "Five",
                    "table" => "song_1918", 
                    "conn" => $conn,
                    "en" => "The Weimar Era (1918-1933)",
                    "fr" => "La République de Weimar (1918-1933)",
                    "de" => "Die Weimarer Republik (1918-1933)"
                )
            );
        ?>
    </div>
</div>