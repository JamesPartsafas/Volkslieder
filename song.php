<?php
    include_once 'includes/logging.php';
    include_once 'includes/whitelist.php';
    
    if(isset($_GET['a']) && isset($_GET['q'])){
        include_once 'includes/dbh.inc.php';
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
    include_once 'template/head.php';
    renderHead($row['title'], $row['display']);
  ?>  
  
<body>

    <?php include_once 'template/header.php' ?>

    <div class="page-container">
        <div class="content-wrapper">
            <?php echo file_get_contents("template/share-sidebar.html") ?>

            <div class="main song">
                <hr>

                <!-- Song title and lyrics retrieved from database -->
                <h3 class="subtitle-name"><?php echo $row['title']; ?></h3> 
                <div class="content poem adjust"><?php echo $row['content']; ?></div>

                <hr>
                
                <div class="en dynamic-content">
                    <div class="row post-song adjust">
                        <div class="col-sm-6"><a href="index.php?dc=en"><button type="button" class="btn btn-light">Return</button></a></div>
                        <div class="col-sm-6"><button type="button" class="btn btn-light" onclick="print();">Print</button></div>
                    </div>
                </div>
                <div class="fr dynamic-content">
                    <div class="row post-song adjust">
                        <div class="col-sm-6"><a href="index.php?dc=fr"><button type="button" class="btn btn-light">Retourner</button></a></div>
                        <div class="col-sm-6"><button type="button" class="btn btn-light" onclick="print();">Imprimer</button></div>
                    </div>
                </div>
                <div class="de dynamic-content">
                    <div class="row post-song adjust">
                        <div class="col-sm-6"><a href="index.php?dc=de"><button type="button" class="btn btn-light">Zurück</button></a></div>
                        <div class="col-sm-6"><button type="button" class="btn btn-light" onclick="print();">Drucken</button></div>
                    </div>
                </div>

                <?php echo file_get_contents("template/share-bottom.html") ?>

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
                    <div class="accordion-body">
                        <?php
                            $period = $_GET['a'];             
                            $sql = "SELECT * FROM $period";
                            $result = mysqli_query($conn, $sql) or die("Bad query. Check URL or try again later.");

                            if(mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_array($result)) {
                                    echo "<a class=\"changing\" href='song.php?a={$period}&q={$row['link']}&dc={$_GET['dc']}'><p>{$row['display']}</p></a>";
                                }
                            }
                            else {
                                echo "<p>No songs to display. Our servers may be experiencing issues. Check back later.</p>";
                            }
                        ?>
                    </div>
                </div>
                <hr>

            </div>
            </div>
        <footer>
            © James Partsafas <?php echo date('Y'); ?>
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="lang.js"></script>

</body>
</html>