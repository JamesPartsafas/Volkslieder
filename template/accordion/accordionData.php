<div class="accordion-body">
    <?php    
        $sql = "SELECT title, display, link FROM $table";
        $result = mysqli_query($conn, $sql) or die("Bad query. Check URL or try again later.");

        if(mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_array($result)) {
                echo "<a class=\"changing\" href='song?a={$table}&q={$row['link']}&dc={$_GET['dc']}'><p>{$row['display']}</p></a>";
            }
        }
        else {
            echo "<p>No songs to display. Our servers may be experiencing issues. Check back later.</p>";
        }
    ?>
</div>