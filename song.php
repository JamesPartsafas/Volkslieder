<!-- Connect to database and navigate to correct MySQL table 
using the value of "a" in the URL and then navigates to the row of the 
MySQL table using the value of "q" in the URL. This will
be used to populate the page dynamically. -->
<?php
    if(isset($_GET['a']) && isset($_GET['q'])){
        include_once 'includes/dbh.inc.php';
        $a = mysqli_real_escape_string($conn, $_GET['a']);
        $q = mysqli_real_escape_string($conn, $_GET['q']);

        $sql = "SELECT * FROM $a WHERE link='$q'";
        $result = mysqli_query($conn, $sql) or die(header('Location: index.php?dc=de')); //Redirect on broken "a" tags to German homepage
        $row = mysqli_fetch_array($result);
        
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
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    
    <!-- CSS Sheet -->
    <link rel="stylesheet" href="styles.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,900&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!--Font Awesome CDN-->
    <script src="https://kit.fontawesome.com/1e07fc90b9.js" crossorigin="anonymous"></script>
    
    <!-- Scripts -->
    <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="lang.js"></script>

    <title><?php echo $row['title']; ?></title>
    <meta name="description" content="<?php echo $row['display']; ?>">
  </head>

<body>

    <header class="sticky-top">
        <div class="row heading">
            <div class="col-6 col-head">
                <p class="header-name">
                    <a class="dynamic-content" href="index.php?dc=<?php echo $_GET['dc']; ?>">Volkslieder</a>
                </p>
            </div>
            <div class="col-6 lang col-head">
                
                <!-- Language menu on desktop view -->
                <div class="lang-menu">
                    <div class="en dynamic-content">
                        <div class="selected-lang english">
                            English
                        </div>
                    </div>
                    <div class="fr dynamic-content">
                        <div class="selected-lang french">
                            Français
                        </div>
                    </div>
                    <div class="de dynamic-content">
                        <div class="selected-lang german">
                            Deutsch
                        </div>
                    </div>
                    <ul>
                        <li>
                            <a href="song.php?a=<?php echo $a."&q=".$q; ?>&dc=en" class="-en">English</a>
                        </li>
                        <li>
                            <a href="song.php?a=<?php echo $a."&q=".$q; ?>&dc=fr" class="-fr">Français</a>
                        </li>
                        <li>
                            <a href="song.php?a=<?php echo $a."&q=".$q; ?>&dc=de" class="-de">Deutsch</a>
                        </li>
                    </ul>
                </div>
                
                <!-- Language menu on mobile view -->
                <div class="dropdown show">
                    <a class="btn btn-secondary" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="en dynamic-content select"><img src="https://www.countryflags.io/gb/flat/32.png"> English</div>
                        <div class="fr dynamic-content select"><img src="https://www.countryflags.io/fr/flat/32.png"> Français</div>
                        <div class="de dynamic-content select"><img src="https://www.countryflags.io/de/flat/32.png"> Deutsch</div>
                    </a>
                  
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="song.php?a=<?php echo $a."&q=".$q; ?>&dc=en"><img src="https://www.countryflags.io/gb/flat/32.png"> English</a>
                      <a class="dropdown-item" href="song.php?a=<?php echo $a."&q=".$q; ?>&dc=fr"><img src="https://www.countryflags.io/fr/flat/32.png"> Français</a>
                      <a class="dropdown-item" href="song.php?a=<?php echo $a."&q=".$q; ?>&dc=de"><img src="https://www.countryflags.io/de/flat/32.png"> Deutsch</a>
                    </div>
                </div>

            </div>
        </div>
    </header>

    <div class="page-container">
        <div class="content-wrapper">
            <?php echo file_get_contents("template/share-sidebar.html") ?>

            <div class="main song">
                <hr>
                <div class="dynamic-content site-wide">
                    <div class="intro adjust">
                        <p class="disclaimer" id="site-wide-message"></p>
                    </div>
                    <hr>
                </div>

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
            </div>
            </div>
        <footer>
            © James Partsafas 2021
        </footer>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>