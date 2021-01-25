<?php
    if(!isset($_GET['dc'])){
        header('Location: index.php?dc=de'); //Redirect on nonexistent dc tag to German homepage
    }

    include_once 'includes/dbh.inc.php';
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
    
    <title>Volkslieder</title>
    <meta name="description" content="Historic German Songs">
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
                            <a href="index.php?dc=en" class="-en">English</a>
                        </li>
                        <li>
                            <a href="index.php?dc=fr" class="-fr">Français</a>
                        </li>
                        <li>
                            <a href="index.php?dc=de" class="-de">Deutsch</a>
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
                      <a class="dropdown-item" href="index.php?dc=en"><img src="https://www.countryflags.io/gb/flat/32.png"> English</a>
                      <a class="dropdown-item" href="index.php?dc=fr"><img src="https://www.countryflags.io/fr/flat/32.png"> Français</a>
                      <a class="dropdown-item" href="index.php?dc=de"><img src="https://www.countryflags.io/de/flat/32.png"> Deutsch</a>
                    </div>
                </div>

            </div>
        </div>
    </header>

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
                                            echo "<a href='song.php?a=song_1200&q={$row['link']}&dc={$_GET['dc']}'><p>{$row['display']}</p></a>";
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
                                            echo "<a href='song.php?a=song_1600&q={$row['link']}&dc={$_GET['dc']}'><p>{$row['display']}</p></a>";
                                        }
                                    }
                                    else {
                                        echo "<p>No songs to display. Our servers may be experiencing issues. Check back later.</p>";
                                    }
                                ?>


                                <a href="songs/1600/lasstunsdaskindleinwiegen.html?dc=en"><p>Laßt uns das Kindlein wiegen (1604)</p></a>
                                <a href="songs/1600/alsmariadiejungfrauschon.html?dc=en"><p>Als Maria die Jungfrau schon (1608)</p></a>
                                <a href="songs/1600/achbleibmitdeinergnade.html?dc=en"><p>Ach bleib mit deiner Gnade, Josua Stegmann (~1616)</p></a>
                                <a href="songs/1600/oheilandreissdiehimmelauf.html?dc=en"><p>O Heiland reiß die Himmel auf, Friedrich von Langenfeld (1623)</p></a>
                                <a href="songs/1600/machthochdietuerdietormachtweit.html?dc=en"><p>Macht hoch die Tür die Tor macht weit, Georg Weissel (1635)</p></a>
                                <a href="songs/1600/nunruhenallewaelder.html?dc=en"><p>Nun ruhen alle Wälder, Paul Gerhardt (1648)</p></a>
                                <a href="songs/1600/eswarenzweikoenigskinder.html?dc=en"><p>Es waren zwei Königskinder (1700)</p></a>
                                <a href="songs/1600/hoertderengelhellelieder.html?dc=en"><p>Hört der Engel helle Lieder (~1750)</p></a>
                                <a href="songs/1600/daslebenisteintraum.html?dc=en"><p>Das Leben ist ein Traum, Johann Gleim (1784)</p></a>
                                <a href="songs/1600/morgenkinderwirdswasgeben.html?dc=en"><p>Morgen, Kinder, wird's was geben (~1780)</p></a>
                                <a href="songs/1600/einschiffleinsahichfahren.html?dc=en"><p>Ein Schifflein sah ich fahren (1781)</p></a>
                                <a href="songs/1600/erlkoenig.html?dc=en"><p>Erlkönig, Johann Wolfgang von Goethe (1782)</p></a>
                                <a href="songs/1600/mariadurcheindornwaldging.html?dc=en"><p>Maria durch ein Dornwald ging (~1800)</p></a>
                                <a href="songs/1600/ichhatteinenkameraden.html?dc=en"><p>Ich hatt' einen Kameraden, Ludwig Uhland (1809)</p></a>
                                <a href="songs/1600/odudeutschlandichmussmarschieren.html?dc=en"><p>O du Deutschland ich muss marschieren, Ernst Arndt (1809)</p></a>
                                <a href="songs/1600/otannenbaumdutraegsteingruenenzweig.html?dc=en"><p>O Tannenbaum du trägst ein grünen Zweig (1812)</p></a>
                                <a href="songs/1600/freiheitdieichmeine.html?dc=en"><p>Freiheit die ich meine, Max von Schenkendorf (1813)</p></a>
                                <a href="songs/1600/ineinemkuehlengrunde.html?dc=en"><p>In einem kühlen Grunde, Joseph von Eichendorff (1813)</p></a>
                                <a href="songs/1600/wasistdesdeutschenvaterland.html?dc=en"><p>Was ist des Deutschen Vaterland, Ernst Arndt (1813)</p></a>
                                <a href="songs/1600/flammeempor.html?dc=en"><p>Flamme empor, Johann Nun (1814)</p></a>
                                <a href="songs/1600/wennalleuntreuwerden.html?dc=en"><p>Wenn alle untreu werden, Max von Schenkendorf (1814)</p></a>
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
                                <a href="songs/1815/odufroehlicheoduselige.html?dc=en"><p>O du fröhliche, o du selige, Johannes Falk (1815)</p></a>
                                <a href="songs/1815/stillenachtheiligenacht.html?dc=en"><p>Stille Nacht, heilige Nacht (1818)</p></a>
                                <a href="songs/1815/ichhabmichergeben.html?dc=en"><p>Ich hab mich ergeben (1820)</p></a>
                                <a href="songs/1815/dieloreley.html?dc=en"><p>Die Loreley, Heinrich Heine (1824)</p></a>
                                <a href="songs/1815/otannenbaum.html?dc=en"><p>O Tannenbaum, Ernst Anschütz (1824)</p></a>
                                <a href="songs/1815/andersaalehellemstrande.html?dc=en"><p>An der Saale hellem Strande, Franz Kugler (1826)</p></a>
                                <a href="songs/1815/mussidenn.html?dc=en"><p>Muss i denn, Friedrich Silcher (1827)</p></a>
                                <a href="songs/1815/goldundsilberliebichsehr.html?dc=en"><p>Gold und Silber lieb ich sehr, August Schnezler (1828)</p></a>
                                <a href="songs/1815/morgenkommtderweihnachtsmann.html?dc=en"><p>Morgen kommt der Weihnachtsmann, Hoffman von Fallersleben (1835)</p></a>
                                <a href="songs/1815/diewachtamrhein.html?dc=en"><p>Die Wacht am Rhein (1840)</p></a>
                                <a href="songs/1815/amweihnachtsbaumdielichterbrennen.html?dc=en"><p>Am Weihnachtsbaum die Lichter brennen, Hermann Kletke (1841)</p></a>
                                <a href="songs/1815/dermaiistgekommen.html?dc=en"><p>Der Mai ist gekommen, Emanuel Geibel (1841)</p></a>
                                <a href="songs/1815/esisteinrosentsprungen1844.html?dc=en"><p>Es ist ein Ros entsprungen, Friedrich Layriz (1844)</p></a>
                                <a href="songs/1815/heckerlied.html?dc=en"><p>Heckerlied, Friedrich Hecker (1848)</p></a>
                                <a href="songs/1815/alsdieroemerfrechgeworden.html?dc=en"><p>Als die Römer frech geworden, Joseph von Scheffel (1849)</p></a>
                                <a href="songs/1815/jetztkommendielustigentage.html?dc=en"><p>Jetzt kommen die lustigen Tage (~1850)</p></a>
                                <a href="songs/1815/imschwarzenwalfischzuaskalon.html?dc=en"><p>Im schwarzen Walfisch zu Askalon, Joseph von Scheffel (1854)</p></a>
                                <a href="songs/1815/odustillezeit.html?dc=en"><p>O du stille Zeit, Joseph von Eichendorff (1857)</p></a>
                                <a href="songs/1815/odeutschlandhochinehren.html?dc=en"><p>O Deutschland hoch in Ehren, Ludwig Bauer (1859)</p></a>
                                <a href="songs/1815/suesserdieglockennieklingen.html?dc=en"><p>Süßer die Glocken nie klingen, Friedrich Kritzinger (1860)</p></a>
                                <a href="songs/1815/morgenwillmeinschatzverreisen.html?dc=en"><p>Morgen will mein Schatz verreisen (1866)</p></a>
                            </div>
                        </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <div class="en dynamic-content">The German Empire (1871-1914)</div>
                                <div class="fr dynamic-content">L'Empire allemand (1871-1914)</div>
                                <div class="de dynamic-content">Das Deutsche Kaiserreich (1871-1914)</div>
                            </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#song-list">
                                <div class="accordion-body">
                                    <a href="songs/1871/heildirimsiegerkranz.html?dc=en"><p>Heil dir im Siegerkranz, Heinrich Harries (1871)</p></a>
                                    <a href="songs/1871/dunkelwarsdermondschienhelle.html?dc=en"><p>Dunkel war’s der Mond schien helle (1880)</p></a>
                                    <a href="songs/1871/freiweg.html?dc=en"><p>Frei Weg, Carl Latann (1888)</p></a>
                                    <a href="songs/1871/altekameraden.html?dc=en"><p>Alte Kameraden, Carl Teike (1889)</p></a>
                                    <a href="songs/1871/beimuellershatgebrannt.html?dc=en"><p>Bei Müllers hats gebrannt (~1900)</p></a>
                                    <a href="songs/1871/drobenimoberland.html?dc=en"><p>Droben im Oberland (1900)</p></a>
                                    <a href="songs/1871/bubundspinnegingenindenwald.html?dc=en"><p>Bub und Spinne gingen in den Wald (1908)</p></a>
                                    <a href="songs/1871/einschoenertagzuendegeht.html?dc=en"><p>Ein schöner Tag zu Ende geht (1910)</p></a>
                                    <a href="songs/1871/wennderhundmitderwurst.html?dc=en"><p>Wenn der Hund mit der Wurst über´n Spucknapf springt (1911)</p></a>
                                    <a href="songs/1871/habsonneimherzenobsstuermt.html?dc=en"><p>Hab Sonne im Herzen ob´s stürmt, Michael Englert (1913)</p></a>
                                    <a href="songs/1871/argonnerwaldummitternacht.html?dc=en"><p>Argonnerwald um Mitternacht (~1914)</p></a>
                                    <a href="songs/1871/dieblauendragoner.html?dc=en"><p>Die blauen Dragoner, G.W. Harmssen (1914)</p></a>
                                    <a href="songs/1871/einemugeinemaeh.html?dc=en"><p>Eine Muh eine Mäh, Wilhelm Lindemann (1914)</p></a>
                                    <a href="songs/1871/reservistensindwirnun.html?dc=en"><p>Reservisten sind wir nun (1914)</p></a>
                                    <a href="songs/1871/gaebesnureinekrone.html?dc=en"><p>Gäb es nur eine Krone (1915)</p></a>
                                    <a href="songs/1871/imgruenenwalddawodiedrosselsingt.html?dc=en"><p>Im grünen Wald da wo die Drossel singt, Friederike Kempner (1915)</p></a>
                                    <a href="songs/1871/wildgaenserauschendurchdienacht.html?dc=en"><p>Wildgänse rauschen durch die Nacht, Walter Flex (1915)</p></a>
                                    <a href="songs/1871/woallestrassenenden.html?dc=en"><p>Wo alle Straßen enden (~1915)</p></a>
                                    <a href="songs/1871/hinausindiefernemitbutterbrotundspeck.html?dc=en"><p>Hinaus in die Ferne mit Butterbrot und Speck (1916)</p></a>
                                    <a href="songs/1871/weitistderwegzurueckinsheimatland.html?dc=en"><p>Weit ist der Weg zurück ins Heimatland (1917)</p></a>
                                    <a href="songs/1871/ichbineindeutscherkenntihrmeinefarben.html?dc=en"><p>Ich bin ein Deutscher kennt ihr meine Farben</p></a>
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
                                    <a href="songs/1918/aufgesellenfrohundmunter.html?dc=en"><p>Auf Gesellen froh und munter (1918)</p></a>
                                    <a href="songs/1918/wenndiearbeitszeitzuende.html?dc=en"><p>Wenn die Arbeitszeit zu Ende, Jürgen Brand (1919)</p></a>
                                    <a href="songs/1918/trumtrumterumtumtum.html?dc=en"><p>Trum, trum, terum tum tum, Walter Gättke (1919)</p></a>
                                    <a href="songs/1918/aufspielerdieihrvereint.html?dc=en"><p>Auf Spieler die ihr hier vereint (~1920)</p></a>
                                    <a href="songs/1918/aufweitergruenerheide.html?dc=en"><p>Auf weiter grüner Heide (~1920)</p></a>
                                    <a href="songs/1918/dasistdasliedvomtaeglichenbrot.html?dc=en"><p>Das ist das Lied vom täglichen Brot, Jörg Mager (1920)</p></a>
                                    <a href="songs/1918/diegrenzwachthieltimosten.html?dc=en"><p>Die Grenzwacht hielt im Osten, Manteuffel-Katzdangen (1920)</p></a>
                                    <a href="songs/1918/esklappertderhufamstege.html?dc=en"><p>Es klappert der Huf am Stege, Hans Riedel (1920)</p></a>
                                    <a href="songs/1918/derwinterderismirnetzwieder.html?dc=en"><p>Der Winter der is mir net z´wieder , Otto Sirl (~1921)</p></a>
                                    <a href="songs/1918/ihrkoenntedaswortverbieten.html?dc=en"><p>Ihr könnt das Wort verbieten, Henry Mackay (1921)</p></a>
                                    <a href="songs/1918/wirziehenueberdiestrassen.html?dc=en"><p>Wir ziehen über die Straßen, Knott (1921)</p></a>
                                    <a href="songs/1918/hohetannenweisendiesterne.html?dc=en"><p>Hohe Tannen weisen die Sterne (1923)</p></a>
                                    <a href="songs/1918/nichtskannunsrauben.html?dc=en"><p>Nichts kann uns rauben, Karl Bröger (1923)</p></a>
                                    <a href="songs/1918/alletagistkeinsonntag.html?dc=en"><p>Alle Tag ist kein Sonntag (1924)</p></a>
                                    <a href="songs/1918/wirhabenhungerhungerhunger.html?dc=en"><p>Wir haben Hunger Hunger Hunger (1925)</p></a>
                                    <a href="songs/1918/imwaldimgruenenwalde.html?dc=en"><p>Im Wald im grünen Walde (1927)</p></a>
                                    <a href="songs/1918/dasistnungarverschollen.html?dc=en"><p>Das ist nun gar verschollen (1930)</p></a>
                                    <a href="songs/1918/hungerhungermarmeladekarbonade.html?dc=en"><p>Hunger Hunger Marmelade Karbonade (1930)</p></a>
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