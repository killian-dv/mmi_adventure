<?php require('inc/debut_html.php'); ?>
    <title>MMI Adventure - Indice</title>
    <?php require('inc/header.php'); ?>
    <?php
        if(!empty($_GET['id'])){
            $date = date("H:i:s");
            if ($_GET['id'] == "1") { echo "<h1>Indice 1</h1>".$date;}
            if ($_GET['id'] == "2") { echo "<h1>Indice 2</h1>".$date;}
            if ($_GET['id'] == "3") { echo "<h1>Indice 3</h1>".$date;}
        } else{
            // page indice sans ?id
            echo "<h1>Vous êtes sur la page Indice, des QrCodes sont cachés un peu partout dans l'IUT (pas d'id selectionné)</h1>";
        }
    ?>
</body>
</html>