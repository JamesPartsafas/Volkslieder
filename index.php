<?php
    if(!isset($_GET['dc'])){
        header('Location: index.php?dc=de'); //Redirect on nonexistent dc tag to German homepage
    }

    include_once 'includes/dbh.inc.php';
    include_once 'includes/logging.php';
?>

<!doctype html>
<html lang="<?php echo $_GET['dc']; ?>">
  <?php
    include_once 'template/head.php';
    renderHead("Volkslider", "Historic German Songs")
  ?>  

  <body>

    <?php include_once 'template/header.php' ?>

    <div class="page-container">
        <div class="content-wrapper">

            <?php echo file_get_contents("template/share-sidebar.html") ?>
            
            <div class="main">
                
                <hr class="top-hr">

                <h3 class="subtitle-title">Volkslieder:</h3>
                <h3 class="subtitle-heading">
                    <div class="en dynamic-content">Historical German Music</div>
                    <div class="fr dynamic-content">Musique historique allemande</div>
                    <div class="de dynamic-content">Historische Lieder des deutschen Volkes</div>
                </h3>
                
                <div class="photo adjust">
                    <img src="img/Caspar_David_Friedrich_Cropped.jpg" alt="A Painting of a German Landscape">
                    <div class="en dynamic-content"><p>The Stages of Life, Caspar David Friedrich, 1835</p></div>
                    <div class="fr dynamic-content"><p>Les Âges de la vie, Caspar David Friedrich, 1835</p></div>
                    <div class="de dynamic-content"><p>Die Lebensstufen, Caspar David Friedrich, 1835</p></div>
                </div>

                <hr>

                <div class="intro adjust">
                    <div class="en dynamic-content">
                        <p class="disclaimer">
                        Contained here is a collection of historical German songs and poems, from time 
                        periods ranging from the Middle Ages to just after the Great War. These may have 
                        been sung at a variety of instances, such as during workdays, while relaxing at home, during marches, 
                        or at any number of special occasions. This website is not to be interpreted as political in any 
                        manner. It is to simply be a repository of historical songs for educational purposes.
                        </p>
                    </div>
                    <div class="fr dynamic-content">
                        <p class="disclaimer">
                        Ici ce retrouve un recueil de chansons et de poèmes allemands historiques, couvrant des périodes 
                        allant du Moyen Âge jusqu'à quelques années après la Grande Guerre. Ces chansons pourraient avoir 
                        été chantées à diverses occasions, y compris pendant les jours de travail, pendant les 
                        moments de détente à la maison, pendant les marches ou lors de nombreux événements spéciaux. 
                        Ce site web ne doit pas être interprété comme étant politique de quelque manière que ce soit. 
                        Il s'agit uniquement d'un recueil de chansons historiques à des fins éducatives.
                        </p>
                    </div>
                    <div class="de dynamic-content">
                        <p class="disclaimer">
                        Hier finden Sie eine Sammlung von historischen deutschen Liedern und Gedichten, die aus dem 
                        Mittelalter bis kurz nach dem Ersten Weltkrieg stammen. Diese könnten zu verschiedenen Anlässen 
                        gesungen worden sein, wie zum Beispiel während Arbeitstagen, beim Ausruhen zu Hause, bei 
                        Märschen oder bei einer beliebigen Anzahl von besonderen Anlässen. Diese Webseite soll in keiner 
                        Weise als politisch interpretiert werden. Sie soll nur eine Sammlung von historischen Liedern 
                        zu Bildungszwecken sein.
                        </p>
                    </div>
                </div>

                <hr>

                <h3 class="subtitle">
                    <div class="en dynamic-content">Song List</div>
                    <div class="fr dynamic-content">Liste de chansons</div>
                    <div class="de dynamic-content">Liederliste</div>
                </h3>

                <div class="content adjust">
                    <div class="accordion" id="song-list">
                        
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                <div class="en dynamic-content">Middle Ages through the German Renaissance (~1200-1600)</div>
                                <div class="fr dynamic-content">Du Moyen Âge à la Renaissance allemande (~1200-1600)</div>
                                <div class="de dynamic-content">Mittelalter bis zur deutschen Renaissance (~1200-1600)</div>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#song-list">
                            <div class="accordion-body">
                                <?php                           
                                    $sql = "SELECT * FROM song_1200";
                                    $result = mysqli_query($conn, $sql) or die("Bad query. Check URL or try again later.");

                                    if(mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_array($result)) {
                                            echo "<a class=\"changing\" href='song.php?a=song_1200&q={$row['link']}&dc={$_GET['dc']}'><p>{$row['display']}</p></a>";
                                        }
                                    }
                                    else {
                                        echo "<p>No songs to display. Our servers may be experiencing issues. Check back later.</p>";
                                    }
                                ?>
                            </div>
                        </div>
                        </div>
                        
                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="en dynamic-content">Early Modern Germany (1600-1815)</div>
                                <div class="fr dynamic-content">Début des temps modernes (1600-1815)</div>
                                <div class="de dynamic-content">Deutschland der frühen Neuzeit (1600-1815)</div>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#song-list">
                            <div class="accordion-body">
                                <?php                         
                                    $sql = "SELECT * FROM song_1600";
                                    $result = mysqli_query($conn, $sql) or die("Bad query. Check URL or try again later.");

                                    if(mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_array($result)) {
                                            echo "<a class=\"changing\" href='song.php?a=song_1600&q={$row['link']}&dc={$_GET['dc']}'><p>{$row['display']}</p></a>";
                                        }
                                    }
                                    else {
                                        echo "<p>No songs to display. Our servers may be experiencing issues. Check back later.</p>";
                                    }
                                ?>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="en dynamic-content">Unification Period (1815-1871)</div>
                                <div class="fr dynamic-content">Période d'unification (1815-1871)</div>
                                <div class="de dynamic-content">Deutsche Einigung (1815-1871)</div>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#song-list">
                            <div class="accordion-body">
                                <?php                           
                                    $sql = "SELECT * FROM song_1815";
                                    $result = mysqli_query($conn, $sql) or die("Bad query. Check URL or try again later.");

                                    if(mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_array($result)) {
                                            echo "<a class=\"changing\" href='song.php?a=song_1815&q={$row['link']}&dc={$_GET['dc']}'><p>{$row['display']}</p></a>";
                                        }
                                    }
                                    else {
                                        echo "<p>No songs to display. Our servers may be experiencing issues. Check back later.</p>";
                                    }
                                ?>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <div class="en dynamic-content">The German Empire (1871-1918)</div>
                                <div class="fr dynamic-content">L'Empire allemand (1871-1918)</div>
                                <div class="de dynamic-content">Das Deutsche Kaiserreich (1871-1918)</div>
                            </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#song-list">
                                <div class="accordion-body">
                                    <?php                           
                                        $sql = "SELECT * FROM song_1871";
                                        $result = mysqli_query($conn, $sql) or die("Bad query. Check URL or try again later.");

                                        if(mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_array($result)) {
                                                echo "<a class=\"changing\" href='song.php?a=song_1871&q={$row['link']}&dc={$_GET['dc']}'><p>{$row['display']}</p></a>";
                                            }
                                        }
                                        else {
                                            echo "<p>No songs to display. Our servers may be experiencing issues. Check back later.</p>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <div class="en dynamic-content">The Weimar Era (1918-1933)</div>
                                <div class="fr dynamic-content">La République de Weimar (1918-1933)</div>
                                <div class="de dynamic-content">Die Weimarer Republik (1918-1933)</div>
                            </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#song-list">
                                <div class="accordion-body">
                                    <?php                           
                                        $sql = "SELECT * FROM song_1918";
                                        $result = mysqli_query($conn, $sql) or die("Bad query. Check URL or try again later.");

                                        if(mysqli_num_rows($result) > 0) {
                                            while($row = mysqli_fetch_array($result)) {
                                                echo "<a class=\"changing\" href='song.php?a=song_1918&q={$row['link']}&dc={$_GET['dc']}'><p>{$row['display']}</p></a>";
                                            }
                                        }
                                        else {
                                            echo "<p>No songs to display. Our servers may be experiencing issues. Check back later.</p>";
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <hr>

                <div class="photo photo-bottom adjust">
                    <img class="proclamation" src="img/Summer_Landscape_Cropped.jpg" alt="A Painting of a Summer Landscape">
                    <div class="en dynamic-content"><p>Summer landscape on the Banks of the Alban Lake, Oswald Achenbach, date unknown</p></div>
                    <div class="fr dynamic-content"><p>L'été sur les rives du lac Alban, Oswald Achenbach, date inconnue</p></div>
                    <div class="de dynamic-content"><p>Sommerlandschaft an den Ufern des Albaner Sees, Oswald Achenbach, Datum unbekannt</p></div>
                </div>

                <hr>

                <?php echo file_get_contents("template/share-bottom.html") ?>

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