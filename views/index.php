<hr class="top-hr">

<h3 class="subtitle-title">Volkslieder:</h3>
<h3 class="subtitle-heading">
    <div class="en dynamic-content">Historical German Music</div>
    <div class="fr dynamic-content">Musique historique allemande</div>
    <div class="de dynamic-content">Historische Lieder des deutschen Volkes</div>
</h3>

<div class="photo adjust">
    <img src=<?php echo BASE_URL . "img/Caspar_David_Friedrich_Cropped.jpg" ?> alt="A Painting of a German Landscape">
    <div class="en dynamic-content"><p>The Stages of Life, Caspar David Friedrich, 1835</p></div>
    <div class="fr dynamic-content"><p>Les Âges de la vie, Caspar David Friedrich, 1835</p></div>
    <div class="de dynamic-content"><p>Die Lebensstufen, Caspar David Friedrich, 1835</p></div>
</div>

<hr>

<?php include_once ROOT_DIR . 'template/static/introduction.html' ?>

<hr>

<h3 class="subtitle">
    <div class="en dynamic-content">Song List</div>
    <div class="fr dynamic-content">Liste de chansons</div>
    <div class="de dynamic-content">Liederliste</div>
</h3>

<?php include_once ROOT_DIR . 'template/accordion/accordion.php' ?>

<hr>

<div class="photo photo-bottom adjust">
    <img class="proclamation" src=<?php echo BASE_URL . "img/Summer_Landscape_Cropped.jpg" ?> alt="A Painting of a Summer Landscape">
    <div class="en dynamic-content"><p>Summer landscape on the Banks of the Alban Lake, Oswald Achenbach, date unknown</p></div>
    <div class="fr dynamic-content"><p>L'été sur les rives du lac Alban, Oswald Achenbach, date inconnue</p></div>
    <div class="de dynamic-content"><p>Sommerlandschaft an den Ufern des Albaner Sees, Oswald Achenbach, Datum unbekannt</p></div>
</div>

<hr>

<?php echo file_get_contents(ROOT_DIR . "template/static/share-bottom.html") ?>