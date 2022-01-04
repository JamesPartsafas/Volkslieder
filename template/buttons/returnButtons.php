<div class=<?php echo "{$lang} dynamic-content" ?>>
    <div class="row post-song adjust">
        <div class="col-sm-6">
            <a href=<?php echo "index.php?dc={$lang}" ?>>
                <button type="button" class="btn btn-light"><?php echo $return ?></button>
            </a>
        </div>
        <div class="col-sm-6">
            <button type="button" class="btn btn-light" onclick="print();"><?php echo $print ?></button>
        </div>
    </div>
</div>