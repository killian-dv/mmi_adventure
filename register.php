    <?php require('inc/debut_html.php'); ?>
    <title>MMI Adventure - Inscription</title>
    <section class="background">
    <?php require('inc/header.php'); ?>

    <?php 
        if(!empty($_POST['ekip_name'])){
            $ekip_name = $_POST['ekip_name'];
            $date = date("H:i:s");
            $sql = 'INSERT INTO db_adventure (nom_equipe, heure_debut)
                    VALUES("'.$ekip_name.'", "'.$date.'")';

            echo '<div class="quit_page"><p>Vous pouvez quitter cette page et préparer votre appareil photo !</br></br>Bonne chance '.$ekip_name.' !</p></div>';
        } else{ 
            echo'
            <h1 class="m17">Inscription</h1>

            <form action="register.php" method="POST">
            <div id="register">
                <label for="ekip_name">Renseignez le nom de votre équipe si dessous&nbsp;:</label></br>
                <input type="text" id="ekip_name" name="ekip_name" minlength="3">
            </div>

                <div id="register_form"><input class="inscription_button" type="submit" value="C’est parti"></div>
            </form>';}
    ?>

    </section>
    <?php require('inc/footer.php'); ?>
</body>
</html>