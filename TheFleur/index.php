<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");
?>

<section id="best-sales" class="best-sales-container">
        <h1 class="section-title">Meilleures ventes</h1>
        <div class="best-plants">
            <?php
                getProdFav();
            ?>
        </div>
</section>
<section id="plants" class="plants-container">
        <h1 class="section-title">Nos plantes</h1>
        <div class="grid-plants">
            <?php
                getPro();
            ?>
        </div>
</section>
<?php
            include("includes/footer.php");
        ?>
<!--<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
    </body>
</html>-->
