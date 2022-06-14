<?php require('inc/debut_html.php'); ?>
    <title>MMI Adventure - Indice</title>
    <section class="background">
    <?php require('inc/header.php'); ?>
    <?php
        if(!empty($_GET['id'])){
            $date = date("H:i:s");
            if ($_GET['id'] == "1") { echo "<h1>Indice 1</h1>".$date;}
            if ($_GET['id'] == "2") { echo "<h1>Indice 2</h1>".$date;}
            if ($_GET['id'] == "3") { echo "<h1>Indice 3</h1>".$date;}
        } else{
            // page indice sans ?id
            //echo "<h1>Vous êtes sur la page Indice, des QrCodes sont cachés un peu partout dans l'IUT (pas d'id selectionné)</h1>";
        }
    ?>
    <h1 class="title_numéro_indice">Indice n°01</h1>
    <h1>Anecdote</h1>
    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse dolores ab eaque aut accusantium optio, laudantium nostrum similique minima possimus.</p>

    <p>Total des indices trouvés : XX sur XX</p>
    </section>
    <?php require('inc/footer.php'); ?>
</body>
</html>