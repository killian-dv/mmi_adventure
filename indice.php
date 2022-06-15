<?php 
    if (empty($_COOKIE['id_ekip'])) {
        header('location : register.php');
    }
    require('inc/debut_html.php'); ?>
    <title>MMI Adventure - Indice</title>
    <section class="background">
    <?php require('inc/header.php'); ?>
    <?php $indice_id=$_GET['id'];
    $tab_info = recup_id_indice($indice_id);
    $mabd = connexion_mmi_adventure();
    if (verif_indice($mabd, $_COOKIE['id_ekip'], $tab_info["bdd_indice"])==false){
        ajout_qrcode_bdd($mabd, $_COOKIE['id_ekip'], $tab_info["bdd_indice"]);
    }
    else {
        echo 'Tu as déja scanné';
    }
    
    deconnexion_mmi_adventure($mabd);
    ?>
    <?php
    if (1 <= $tab_info["numero_indice"] && 35 >= $tab_info["numero_indice"]) {
        echo '<h1 class="title_numero_indice">Indice n°'.$tab_info["numero_indice"].'</h1>';
    }
    if ($tab_info["numero_indice"] == "piege") {
        echo '<h1 class="title_numero_indice"> QRCode piégé !</h1>';
    }
    if ($tab_info["numero_indice"] == "stand B" or $tab_info["numero_indice"] =="stand K" or $tab_info["numero_indice"] =="stand K" or $tab_info["numero_indice"] =="stand M" or $tab_info["numero_indice"] =="stand V" or $tab_info["numero_indice"] =="stand T") {
        echo '<h1 class="title_numero_indice">' .$tab_info["numero_indice"].'</h1>';
    }
    ?>
    

    <div class="paragraphe">
    <?php
    if (1 <= $tab_info["numero_indice"] && 35 >= $tab_info["numero_indice"]) {
        echo '<h1>Anecdote</h1>';
        echo '<p>'.$tab_info["anecdote"].'</p>';
    }
    if ($tab_info["numero_indice"] == "piege") {
        echo '<p>'.$tab_info["anecdote"].'</p>';
    }
    if ($tab_info["numero_indice"] == "stand B" or $tab_info["numero_indice"] =="stand K" or $tab_info["numero_indice"] =="stand K" or $tab_info["numero_indice"] =="stand M" or $tab_info["numero_indice"] =="stand V" or $tab_info["numero_indice"] =="stand T") {
        echo '<p>'.$tab_info["anecdote"].'</p>';
    }
    ?>
    </div>
    <p class="total_indice">Total des indices trouvés : XX sur XX</p>
    </section>
    <?php require('inc/footer.php'); ?>
</body>
</html>