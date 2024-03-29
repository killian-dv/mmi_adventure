<?php 
    if (empty($_COOKIE['id_ekip'])) {
        header('location : register.php');
    }
    require('inc/debut_html.php'); ?>
    <title>MMI Adventure - Indice</title>
    <section class="background">
    <?php require('inc/header.php'); ?>
    <?php $indice_id=$_GET['id'];
    $date_fin = date("H:i:s");
    $tab_info = recup_id_indice($indice_id);
    $mabd = connexion_mmi_adventure();
    if (verif_indice($mabd, $_COOKIE['id_ekip'], $tab_info["bdd_indice"])==false){
        
        ajout_qrcode_bdd($mabd, $_COOKIE['id_ekip'], $tab_info["bdd_indice"]);
        compteur($mabd, $_COOKIE['id_ekip'], $tab_info["bdd_indice"]);
  
        
        if (1 <= $tab_info["numero_indice"] && 35 >= $tab_info["numero_indice"]) {
            echo '<h1 class="title_numero_indice">Indice n°'.$tab_info["numero_indice"].'</h1>';
            $numero_stand = test_stand($mabd, $_COOKIE['id_ekip']);
            date_fin($mabd, $_COOKIE['id_ekip'], $date_fin);
        }
        if ($tab_info["numero_indice"] == "piege") {
            echo '<h1 class="title_numero_indice"> QRCode piégé !</h1>';
            $numero_indice_perdu = desactivation_indice($mabd, $_COOKIE['id_ekip']);
        }
        if ($tab_info["numero_indice"] == "stand B" or $tab_info["numero_indice"] =="stand K" or $tab_info["numero_indice"] =="stand K" or $tab_info["numero_indice"] =="stand M" or $tab_info["numero_indice"] =="stand V" or $tab_info["numero_indice"] =="stand T") {
            echo '<h1 class="title_numero_indice">' .$tab_info["numero_indice"].'</h1>';
            date_fin($mabd, $_COOKIE['id_ekip'], $date_fin);
        }
        $temps_total = calcul_temps($mabd, $_COOKIE['id_ekip']);
        temps_total($mabd, $_COOKIE['id_ekip'], $temps_total);
    }
    else {
        if (1 <= $tab_info["numero_indice"] && 35 >= $tab_info["numero_indice"]) {
            echo '<h1 class="title_numero_indice">Indice n°'.$tab_info["numero_indice"].'</h1>';
        }
        if ($tab_info["numero_indice"] == "piege") {
            echo '<h1 class="title_numero_indice"> QRCode piégé !</h1>';
        }
        if ($tab_info["numero_indice"] == "stand B" or $tab_info["numero_indice"] =="stand K" or $tab_info["numero_indice"] =="stand K" or $tab_info["numero_indice"] =="stand M" or $tab_info["numero_indice"] =="stand V" or $tab_info["numero_indice"] =="stand T") {
            echo '<h1 class="title_numero_indice">' .$tab_info["numero_indice"].'</h1>';
        }
        echo '<p style=text-align:center;>Tu as déja scanné</p>';
    ?> <style>
            .paragraphe
            {
                display: none;
            }
        </style>
    <?php
    }
    gagnant($mabd, $_COOKIE['id_ekip']);
        //function afficher qr code à faire
    deconnexion_mmi_adventure($mabd);
    ?>

    

    <div class="paragraphe">
    <?php
    if (1 <= $tab_info["numero_indice"] && 35 >= $tab_info["numero_indice"]) {
        echo '<h1>Anecdote</h1>';
        echo '<p>'.$tab_info["anecdote"].'</p>';
        $mabd = connexion_mmi_adventure();
        $total_indice = recup_compteur($mabd, $_COOKIE['id_ekip']);
        deconnexion_mmi_adventure($mabd);
        if ($total_indice==5 or $total_indice==11 or $total_indice==17 or $total_indice==23 or $total_indice==29) {
            echo '</br></br><b><p>Vous devez vous rendre au stand '.$numero_stand .' (c\'est obligatoire sinon tu ne peux pas continuer l\'aventure).</b></p>';
        }
    }
    if ($tab_info["numero_indice"] == "piege") {
        echo '<p>'.$tab_info["anecdote"]. ' ' .$numero_indice_perdu.'</p>';
    }
    if ($tab_info["numero_indice"] == "stand B" or $tab_info["numero_indice"] =="stand K" or $tab_info["numero_indice"] =="stand K" or $tab_info["numero_indice"] =="stand M" or $tab_info["numero_indice"] =="stand V" or $tab_info["numero_indice"] =="stand T") {
        echo '<p>'.$tab_info["anecdote"].'</p>';
    }
    ?>
    </div>
    <?php 
    $mabd = connexion_mmi_adventure();
    echo '<p class="total_indice">Total des indices trouvés : '.recup_compteur($mabd, $_COOKIE['id_ekip']). ' sur 35</p>';
    deconnexion_mmi_adventure($mabd);
    ?>
    </section>
    <?php require('inc/footer.php'); ?>
</body>
</html>