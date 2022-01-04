<div class="accordion-item">
    <h2 class="accordion-header" id=<?php echo "heading{$position}" ?>>
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target=<?php echo "#collapse{$position}" ?> aria-expanded="false" aria-controls=<?php echo "collapse{$position}" ?>>
            <div class="en dynamic-content"><?php echo $en ?></div>
            <div class="fr dynamic-content"><?php echo $fr ?></div>
            <div class="de dynamic-content"><?php echo $de ?></div>
        </button>
    </h2>
    <div id=<?php echo "collapse{$position}" ?> class="accordion-collapse collapse" aria-labelledby=<?php echo "heading{$position}" ?> data-bs-parent="#song-list">
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
</div>