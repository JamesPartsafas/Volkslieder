<?php
    include_once '../config.php';
    include_once ROOT_DIR . 'includes/logging.php';
    include_once ROOT_DIR . 'template/variableTemplate.php';
    include_once ROOT_DIR . 'includes/whitelist.php';
    
    if(isset($_GET['a']) && isset($_GET['q'])){
        include_once ROOT_DIR . 'includes/dbh.inc.php';
        $a = mysqli_real_escape_string($conn, $_GET['a']);
        $q = mysqli_real_escape_string($conn, $_GET['q']);

        if(!in_array($a, $whitelist)) {
            die(header('Location: index.php?dc=de'));
        }

        $stmt = $conn->prepare("SELECT * FROM $a WHERE link=?");
        $stmt->bind_param("s", $q);
        $stmt->execute() or die(header('Location: index.php?dc=de'));
        $result = $stmt->get_result() or die(header('Location: index.php?dc=de'));
        $row = $result->fetch_assoc();
        
        if(!mysqli_num_rows ( $result )) {
            (header('Location: index.php?dc=de')); //Redirect on broken "q" tags to German homepage
        }
    } 
    else {
        header('Location: index.php?dc=de'); //Redirect on missing a or q tags to German homepage
    }

    if(!isset ($_GET['dc'])) {
        header('Location: song.php?a='.$_GET['a'].'&q='.$_GET['q'].'&dc=de'); //Redirect on missing dc tag to German version of current page
    }
?>

<!doctype html>
<html lang="<?php echo $_GET['dc']; ?>">
  <?php
    includeWithVariables(
        ROOT_DIR . 'template/head.php', 
        array(
            "title" => $row['title'], 
            "description" => $row['display']
        )
    );
  ?> 
  
<body>

    <?php include_once ROOT_DIR . 'template/header.php' ?>

    <div class="page-container">
        <div class="content-wrapper">
            <?php echo file_get_contents(ROOT_DIR . "template/static/share-sidebar.html") ?>

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
                                "table" => $a, 
                                "conn" => $conn
                            )
                        ); 
                    ?>
                </div>
                <hr>

            </div>
            </div>
        <?php include_once ROOT_DIR . 'template/footer.php' ?>
    </div>

    <?php include_once ROOT_DIR . 'template/static/includedScripts.php' ?>

</body>
</html>