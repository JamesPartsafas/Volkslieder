<div class="main song">
    <hr>

    <h3 class="subtitle-name"><?php echo $row['title']; ?></h3> 
    <div class="content poem adjust"><?php echo $row['content']; ?></div>

    <hr>
    
    <?php
        include_once ROOT_DIR . 'template/buttons/returnButtonsHolder.php';
        echo file_get_contents(ROOT_DIR . "template/static/share-bottom.html")
    ?>

    <hr>
    
    <div class="intro adjust">
        <p class="disclaimer dynamic-content" id="disclaimer-bottom"></p>
        <p class="default-message disclaimer dynamic-content">
            Diese Webseite soll in keiner Weise als politisch interpretiert werden. 
            Sie soll nur eine Sammlung von historischen Liedern zu Bildungszwecken sein.
        </p>
    </div>

    <hr>

    <div class="share songs adjust" id="period-list">
        <div class="en dynamic-content">
            <h3 class="dynamic-content subtitle">All songs from this period</h3>
        </div>
        <div class="fr dynamic-content">
            <h3 class="dynamic-content subtitle">Toutes les chansons de cette période</h3>
        </div>
        <div class="de dynamic-content">
            <h3 class="dynamic-content subtitle">Alle Lieder aus dieser Zeit</h3>
        </div>
    </div>

    <hr>
    <div class="intro adjust">
        <?php
            includeWithVariables(
                ROOT_DIR . 'template/accordion/accordionData.php', 
                array(
                    "table" => $table, 
                    "conn" => $conn
                )
            ); 
        ?>
    </div>
    <hr>

</div>
