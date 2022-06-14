    <?php setcookie('id_ekip', '', time()+60*60*24*10, '/'); ?>
    <?php require('inc/debut_html.php'); ?>
    <title>MMI Adventure - Inscription</title>
    <section class="background">
    <?php require('inc/header.php'); ?>

    <?php 
        if(!empty($_POST['ekip_name'])){
            $ekip_name = $_POST['ekip_name'];
            $date = date("H:i:s");
            $mabd = connexion_mmi_adventure();
            if (doublon($mabd, $ekip_name)==false){
                ajout_equipe($mabd, $ekip_name, $date);
                setcookie('id_ekip', recup_id_ekip($mabd, $ekip_name), time()+60*60*24*10, '/');
            }else {
                header('location: register.php')
            }
            deconnexion_mmi_adventure($mabd);

            echo '<div class="quit_page"><p>Vous pouvez quitter cette page et préparer votre appareil photo !</br></br>Bonne chance '.$ekip_name.' !</p></div>';
            echo $_COOKIE["id_ekip"];
        } else{ 
            echo'
            <h1 class="m17">Inscription</h1>

            <form action="register.php" method="POST">
            <div id="register">
                <label for="ekip_name">Renseignez le nom de votre équipe si dessous&nbsp;:</label></br>
                <input type="text" id="ekip_name" name="ekip_name" minlength="3">
            </div>

            <div id="cookies_auto">
                <p>Lorsque vous appuyez sur le boutton "C\'est parti" le chrono se lance !</br>En appuyant sur "C\'est parti" vous acceptez l\'ensemble des cookies.</p>
            </div>

                <div id="register_form"><input class="inscription_button" type="submit" value="C’est parti"></div>
            </form>';}
    ?>

    </section>
    <?php require('inc/footer.php'); ?>
</body>
</html>