<!doctype html>
<html lang="<?php echo $_GET['dc']; ?>">
  <?php
    includeWithVariables(
        ROOT_DIR . 'template/head.php', 
        array(
            "title" => "Volkslieder", 
            "description" => "Historic German Songs"
        )
    );
  ?>  

  <body>

    <?php include_once ROOT_DIR . 'template/header.php' ?>

    <div class="page-container">
        <div class="content-wrapper">

            <?php echo file_get_contents(ROOT_DIR . "template/static/share-sidebar.html") ?>
            
            <?php echo $innerContent; ?>

        </div>

        <?php include_once ROOT_DIR . 'template/footer.php' ?>
    </div>

    <?php include_once ROOT_DIR . 'template/static/includedScripts.php' ?>

  </body>
</html>