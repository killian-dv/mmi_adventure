<?php
  // LIBRAIRIE "lib_crud.inc.php"
  // 2022 - BUT MMI - IUT Troyes - URCA
  // MMI ADVENTURE

  // insertion des dépendances
  require 'secretxyz123.php';

// connexion à la base de données
function connexion_mmi_adventure(){
    // on initialise la variable de connexion à null
    $mabd = null;
    try {
    // on essaie de se connecter
    // le port et le dbname ci-dessous sont À ADAPTER à vos données
    $mabd = new PDO('mysql:host=localhost;dbname=mmi_adventure;charset=UTF8;', LUTILISATEUR, LEMOTDEPASSE);
     
    // on passe le codage en utf-8
    $mabd->query('SET NAMES utf8;');
    } catch (PDOException $e) {
    // s'il y a une erreur, on l'affiche
    echo '<p>Erreur : ' . $e->getMessage() . '</p>';
    die();
    }
    // on retourne la variable de connexion
    return $mabd;
}

// déconnexion de la base de données
function deconnexion_mmi_adventure(&$mabd) {
    // on se déconnexte en mettant la variable de connexion à null 
    $mabd=null;
}

// récupérer l'id d'un indice dans l'url
function recup_id_indice($indice_id) {
  if(!empty($indice_id)){
    // indice n°1
    if ($indice_id == "3s8e8RYax3QD9Q") { 
      $numero_indice=1;
      $bdd_indice="indice_1";
      $anecdote = 'Si tu veux faire une petite pause sous le soleil de Troyes, tu peux te poser sur un des bancs devant le bâtiment H.';
    }
    // indice n°2
    if ($indice_id == "URAVnis5Ej55ka") { 
      $numero_indice=2;
      $bdd_indice="indice_2";
      $anecdote = 'Un déchet à jeter ? L\'IUT n\'est pas une poubelle, pensez à jeter tous vos déchets ici ou dans les différentes poubelles qui se trouvent dans l’établissement.';
    }
    // indice n°3
    if ($indice_id == "KEwBhcT4NRPi4e") { 
      $numero_indice=3;
      $bdd_indice="indice_3";
      $anecdote = 'lalalalala';
    }
    // indice n°4
    if ($indice_id == "MP5jZvdqmZpUKc") { 
      $numero_indice=4;
      $bdd_indice="indice_4";
      $anecdote = 'lalalalala';
    }
    // indice n°5
    if ($indice_id == "43KLnZYRGJaTph") { 
      $numero_indice=5;
      $bdd_indice="indice_5";
      $anecdote = 'Voici l\'amphithéâtre, cet endroit avec de nombreuses chaises sur lesquelles vous allez rester des heures et des heures sans forcément savoir dans quel cours vous êtes, c\'est ici que vous avancerez la plupart du temps sur vos trophées Clash Royale.';
    }
    // indice n°6
    if ($indice_id == "uVqWQT944J69Qn") { 
      $numero_indice=6;
      $bdd_indice="indice_6";
      $anecdote = 'Vous vous trouvez dans le studio, c\'est ici que vous allez tourner de petites vidéos avec les caméras situées dans la petite pièce avec la vitre. Attention, ne tentez pas de voler quelque chose, cette pièce est sous vidéo surveillance.';
    }
    // indice n°7
    if ($indice_id == "zBkWrW2gw9CWGG") { 
      $numero_indice=7;
      $bdd_indice="indice_7";
      $anecdote = 'Vous êtes dans la salle MAC, impressionnant non ? Pourtant, vous serez de temps en temps dans cette salle par petits groupes de 15.';
    }
    // indice n°8
    if ($indice_id == "JbxcUSq5a6M3tf") { 
      $numero_indice=8;
      $bdd_indice="indice_8";
      $anecdote = 'Bienvenue dans la grande salle de culture Artistique, une salle où vous allez réaliser pour les plus grands artistes vos meilleurs dessins, vos meilleures créations, par contre pour ceux qui ne savent pas dessiner bon courage faites au mieux ! Vous allez apercevoir des recettes dans les couloirs, elles ont été réaliser par des étudiants comme vous au cours de l\'année.';
    }
    // indice n°9
    if ($indice_id == "ocSD7SmpU5Ydb7") { 
      $numero_indice=9;
      $bdd_indice="indice_9";
      $anecdote = 'Vous êtes positionné dans un endroit sombre du bâtiment, sortez vite avant que des plus gros geeks que vous, bien boutonneux arrive et vous touche de partout !';
    }
    // indice n°10
    if ($indice_id == "bfw8KCJMhBxyzi") { 
      $numero_indice=10;
      $bdd_indice="indice_10";
      $anecdote = 'Franchement pas mal il était bien caché celui-là, vous êtes dans la salle H007 qui est reliée aussi avec la H008, cette salle est souvent utilisée par les professeurs pour vous faire cours, que ce soit dans le développement ou en création graphique.';
    }
    // indice n°11
    if ($indice_id == "2r9nHDWBnkhT6o") { 
      $numero_indice=11;
      $bdd_indice="indice_11";
      $anecdote = 'Woow vous êtes arrivez au PATIO, coin relax non ? Ici vous pourrez travaillez au soleil tranquillement attention, les bureux des profs donnent sur cette endroit, ne faites pas de bétises.';
    }
    // indice n°12
    if ($indice_id == "x457MNk4yLubaR") { 
      $numero_indice=12;
      $bdd_indice="indice_12";
      $anecdote = 'La H001 la première salle du bâtiment MMI, cette salle vraiment petite accompagnée de son énorme écran, mis à part pour des plans lorsque vous ferez des tournages vidéo, vous n\'irez quasiment jamais dans celle-ci, mais bon avouons qu\'elle est tout de même assez cool.';
    }
    // indice n°13
    if ($indice_id == "jUQqb5BAFRx8aa") { 
      $numero_indice=13;
      $bdd_indice="indice_13";
      $anecdote = 'En MMI pensez à toujours amenez votre pc, sans vous serez perdu pour le reste de l\'année.';
    }
    // indice n°14
    if ($indice_id == "ts8WzX2Kzfs9VS") { 
      $numero_indice=14;
      $bdd_indice="indice_14";
      $anecdote = 'Compliqué pour se faire des rencontres ici ? Le bâtiment TC et la cafétéria sont les endroits clés dans l\'enceinte du BUT pour se faire de bonnes rencontres ;)';
    }
    // indice n°15
    if ($indice_id == "obrHTUxBCux3YJ") { 
      $numero_indice=15;
      $bdd_indice="indice_15";
      $anecdote = 'Levez les yeux de votre PC de temps en temps, nous ne sommes pas dans le monde virtuel !';
    }
    // indice n°16
    if ($indice_id == "Q4vP5TG5vhjUeU") { 
      $numero_indice=16;
      $bdd_indice="indice_16";
      $anecdote = 'Vous avez découvert les toilettes, il y en a à chaque étage aux mêmes endroits !';
    }
    // indice n°17
    if ($indice_id == "U2UMirtsvigjcr") { 
      $numero_indice=17;
      $bdd_indice="indice_17";
      $anecdote = 'Par cette fenêtre, vous pourrez regarder les profs se la couler douce au soleil.';
    }
    // indice n°18
    if ($indice_id == "xF5osYnd6qc8jw") { 
      $numero_indice=18;
      $bdd_indice="indice_18";
      $anecdote = 'Vous êtes dans la salle H205, beau matos n\'est-ce pas ? Il est neuf de cette année, attention une alarme est disposée sur chaque poste de travail !';
    }
    // indice n°19
    if ($indice_id == "BZbdXCP67faRnf") { 
      $numero_indice=19;
      $bdd_indice="indice_19";
      $anecdote = 'Vous êtes à l\'entrée du Bâtiment A, vous y passerez quelques fois pour réaliser des partiels...😳';
    }
    // indice n°20
    if ($indice_id == "8pVTu8vn4h5eH5") { 
      $numero_indice=20;
      $bdd_indice="indice_20";
      $anecdote = 'L\'infirmerie comme au collège et au lycée, il y en a une ici en A111, retenez bien cette salle, cela peut vous être utile.';
    }
    // indice n°21
    if ($indice_id == "DkJ9BerWWoLDUh") { 
      $numero_indice=21;
      $bdd_indice="indice_21";
      $anecdote = 'C\'est la cafétéria ici, les distributeurs sont bien fournis, prenez une boisson, ce n\'est pas cher :)';
    }
    // indice n°22
    if ($indice_id == "vd6k6CLB4G2NwC") { 
      $numero_indice=22;
      $bdd_indice="indice_22";
      $anecdote = 'Ici c\'est en libre accès, vous pouvez durant votre pause faire du sport ou encore vous baladez.';
    }
    // indice n°23
    if ($indice_id == "BPi2Tg2uFWqyuD") { 
      $numero_indice=23;
      $bdd_indice="indice_23";
      $anecdote = 'Ici c\'est chill, vous n\'êtes pas dans un endroit spécial MMI donc vous pourrez croiser les autres formations et vous posez avec.';
    }
    // indice n°24
    if ($indice_id == "o54CJ4rMyVftbE") { 
      $numero_indice=24;
      $bdd_indice="indice_24";
      $anecdote = 'En face de la cafétéria vous trouvez une salle de détente qui est ici, vous pourrez avancer dans vos devoirs, vous reposez, faire des rencontres.';
    }
    // indice n°25
    if ($indice_id == "u6ktLfJ3AU9RYD") { 
      $numero_indice=25;
      $bdd_indice="indice_25";
      $anecdote = 'À l\'IUT, il n\'y a pas que des étudiants qui viennent en voiture, certains viennent à vélo, voici un des garages à vélo ici.';
    }
    // indice n°26
    if ($indice_id == "9heHYNZC762tBh") { 
      $numero_indice=26;
      $bdd_indice="indice_26";
      $anecdote = 'L\'entrée du bâtiment TC, le meilleur bâtiment pour des geek...';
    }
    // indice n°27
    if ($indice_id == "ZNLLQezUcQg6b3") { 
      $numero_indice=27;
      $bdd_indice="indice_27";
      $anecdote = 'Malin de votre part, celui là n\'étais pas simple, un conseil ne lachez rien durant votre formation, cela pourra vous paraître dûr mais il faut s’attacher !';
    }
    // indice n°28
    if ($indice_id == "JHgiU2uiQvhP8g") { 
      $numero_indice=28;
      $bdd_indice="indice_28";
      $anecdote = 'Marre de polluer la planète avec votre voiture ou vous n\'avez pas seulement de permis ou de voiture ? Venez en vélo à l\'IUT.';
    }
    // indice n°29
    if ($indice_id == "uhj7UpjvdG8fyM") { 
      $numero_indice=29;
      $bdd_indice="indice_29";
      $anecdote = 'Vous êtes de bon chercheur ! Continuez d\'explorer le reste du bâtiment et vous trouverez la totalité des QR codes.';
    }
    // indice n°30
    if ($indice_id == "SBuR98KQCQwaZ2") { 
      $numero_indice=30;
      $bdd_indice="indice_30";
      $anecdote = 'Vous vous trouvez dans la meilleure salle du Bâtiment H selon nous, vous serez souvent en autonomie dans celle-ci, avec beaucoup de poste de travail disponible.';
    }
    

    // piège 1
    if ($indice_id == "MXhiUDdRPy65h7") { 
      $numero_indice="piege";
      $bdd_indice="piege_1";
      $anecdote = 'Vous venez de scanner un QRCode qui n\'est pas sur la carte. Vous devez donc re-scanner l\'';
    }
    // piège 2
    if ($indice_id == "rYF9Nr3wKHCead") { 
      $numero_indice="piege";
      $bdd_indice="piege_2";
      $anecdote = 'Vous venez de scanner un QRCode qui n\'est pas sur la carte. Vous devez donc re-scanner l\'';
    }


    // stand 1
    if ($indice_id == "RAR4xEWfvU6iVJ") { 
      $numero_indice="stand B";
      $bdd_indice="stand_1";
      $anecdote = 'Stand B validé. Vous pouvez continuer à chercher les indices sur votre carte.';
    }
    // stand 2
    if ($indice_id == "5Mtvpwb9HGHT2h") { 
      $numero_indice="stand K";
      $bdd_indice="stand_2";
      $anecdote = 'Stand K validé. Vous pouvez continuer à chercher les indices sur votre carte.';
    }
    // stand 3
    if ($indice_id == "hAoKC7wQjihYP2") { 
      $numero_indice="stand M";
      $bdd_indice="stand_3";
      $anecdote = 'Stand M validé. Vous pouvez continuer à chercher les indices sur votre carte.';
    }
    // stand 4
    if ($indice_id == "MNGM3Fa9SYf42h") { 
      $numero_indice="stand V";
      $bdd_indice="stand_4";
      $anecdote = 'Stand V validé. Vous pouvez continuer à chercher les indices sur votre carte.';
    }
    // stand 5
    if ($indice_id == "B5UdgrWx4a8SiM") { 
      $numero_indice="stand T";
      $bdd_indice="stand_5";
      $anecdote = 'Stand T validé. Vous pouvez continuer à chercher les indices sur votre carte.';
    }
    return array( "numero_indice" => $numero_indice, "anecdote" => $anecdote, "bdd_indice" => $bdd_indice,);
} else{
    // page indice sans ?id
    //echo "<h1>Vous êtes sur la page Indice, des QrCodes sont cachés un peu partout dans l'IUT (pas d'id selectionné)</h1>";
}
}

// Ajouter le nom de l'équipe et l'heure de départ dans la BDD
function ajout_equipe($mabd, $ekip_name, $date) {
  $req = 'INSERT INTO db_adventure (nom_equipe, heure_debut)
  VALUES("'.$ekip_name.'", "'.$date.'")';
    try {
      $resultat = $mabd->query($req);
  } catch (PDOException $e) {
      // s'il y a une erreur, on l'affiche
      echo '<p>Erreur : ' . $e->getMessage() . '</p>';
      die();
  }
}


function recup_id_ekip($mabd, $ekip_name) {
  $req = 'SELECT equipe_id FROM db_adventure WHERE nom_equipe ="'.$ekip_name.'"';
  try {
      $resultat = $mabd->query($req);
  } catch (PDOException $e) {
      // s'il y a une erreur, on l'affiche
      echo '<p>Erreur : ' . $e->getMessage() . '</p>';
      die();
  }
  foreach ($resultat as $value) {
    return $value['equipe_id'];
} 
}

function doublon($mabd, $ekip_name){
  $req = 'SELECT nom_equipe FROM db_adventure WHERE nom_equipe ="'.$ekip_name.'"';
  try {
    $resultat = $mabd->query($req);
} catch (PDOException $e) {
    // s'il y a une erreur, on l'affiche
    echo '<p>Erreur : ' . $e->getMessage() . '</p>';
    die();
}
  foreach($resultat as $value){
    if ($value['nom_equipe']==$ekip_name){
      return true;
    }
    else {
      return false;
    }
  }
}

function ajout_qrcode_bdd($mabd, $ekip_id, $id_qr_code) {
  $req = 'UPDATE db_adventure SET '.$id_qr_code.' = TRUE WHERE equipe_id ='.$ekip_id.'';
  try {
    $resultat = $mabd->query($req);
} catch (PDOException $e) {
    // s'il y a une erreur, on l'affiche
    echo '<p>Erreur : ' . $e->getMessage() . '</p>';
    die();
}
}

function verif_indice($mabd, $ekip_id, $id_qr_code){
  $req = 'SELECT '.$id_qr_code.' FROM db_adventure WHERE equipe_id ='.$ekip_id.'';
  try {
    $resultat = $mabd->query($req);
  } catch (PDOException $e) {
      // s'il y a une erreur, on l'affiche
      echo '<p>Erreur : ' . $e->getMessage() . '</p>';
      die();
  }
  // la fonction retourne le tableau associatif 
  // contenant les champs et leurs valeurs
  foreach($resultat as $value){
    if ($value[$id_qr_code]==NULL || $value[$id_qr_code]==0){
      return false;
    }
    else {
      return true;
    }
  }
}

function compteur($mabd, $ekip_id, $type_qrcode){
  if ($type_qrcode=='piege_1' or $type_qrcode=='piege_2') {
    $req = 'UPDATE db_adventure SET total_indice= total_indice - 1 WHERE equipe_id ='.$ekip_id.'';
  }
  else {
    $req = 'UPDATE db_adventure SET total_indice= total_indice + 1 WHERE equipe_id ='.$ekip_id.'';
  }
  try {
    $resultat = $mabd->query($req);
  } catch (PDOException $e) {
      // s'il y a une erreur, on l'affiche
      echo '<p>Erreur : ' . $e->getMessage() . '</p>';
      die();
  }
}

function recup_compteur($mabd, $ekip_id){
  $req = 'SELECT total_indice FROM db_adventure WHERE equipe_id ='.$ekip_id.'';
  try {
    $resultat = $mabd->query($req);
  } catch (PDOException $e) {
      // s'il y a une erreur, on l'affiche
      echo '<p>Erreur : ' . $e->getMessage() . '</p>';
      die();
  }
  // la fonction retourne le tableau associatif 
  // contenant les champs et leurs valeurs
  foreach($resultat as $value){
    return $value['total_indice'];
  }
}

function gagnant($mabd, $ekip_id){
$req = 'SELECT total_indice FROM db_adventure WHERE equipe_id ='.$ekip_id.'';
  try {
    $resultat = $mabd->query($req);
  } catch (PDOException $e) {
      // s'il y a une erreur, on l'affiche
      echo '<p>Erreur : ' . $e->getMessage() . '</p>';
      die();
  }
  // la fonction retourne le tableau associatif 
  // contenant les champs et leurs valeurs
  foreach($resultat as $value){
    if ($value['total_indice']==35){
      echo 'Vous avez réussi à trouver les 35 indices, rendez vous dans l\'amphithéatre (en H018).';
    }
  }
}

function date_fin($mabd, $ekip_id, $date_fin) {
  $req = 'UPDATE db_adventure SET heure_fin = "'.$date_fin.'" WHERE equipe_id ='.$ekip_id.'';
  try {
    $resultat = $mabd->query($req);
} catch (PDOException $e) {
    // s'il y a une erreur, on l'affiche
    echo '<p>Erreur : ' . $e->getMessage() . '</p>';
    die();
}
}

function calcul_temps($mabd, $ekip_id){
  $req = 'SELECT heure_debut, heure_fin FROM db_adventure WHERE equipe_id ='.$ekip_id.'';
  try {
    $resultat = $mabd->query($req);
  } catch (PDOException $e) {
      // s'il y a une erreur, on l'affiche
      echo '<p>Erreur : ' . $e->getMessage() . '</p>';
      die();
  }
  // la fonction retourne le tableau associatif 
  // contenant les champs et leurs valeurs
  foreach($resultat as $value){
    $a = strtotime($value['heure_debut']);
    $b = strtotime($value['heure_fin']);
    $temps_total = gmdate('H:i:s',$b-$a);
    return $temps_total;
  }
}

function temps_total($mabd, $ekip_id, $temps_total) {
  $req = 'UPDATE db_adventure SET temps_total = "'.$temps_total.'" WHERE equipe_id ='.$ekip_id.'';
  try {
    $resultat = $mabd->query($req);
} catch (PDOException $e) {
    // s'il y a une erreur, on l'affiche
    echo '<p>Erreur : ' . $e->getMessage() . '</p>';
    die();
}
}

function desactivation_indice($mabd, $ekip_id) {
  $req = 'SELECT indice_1, indice_2, indice_3, indice_4, indice_5, indice_6, indice_7, indice_8, indice_9, indice_10, indice_11, indice_12, indice_13, indice_14, indice_15, indice_16, indice_17, indice_18, indice_19, indice_20, indice_21, indice_22, indice_23, indice_24, indice_25, indice_26, indice_27, indice_28, indice_29, indice_30 
  FROM db_adventure WHERE equipe_id ='.$ekip_id.'';
  try {
    $resultats = $mabd->query($req);
  } catch (PDOException $e) {
      // s'il y a une erreur, on l'affiche
      echo '<p>Erreur : ' . $e->getMessage() . '</p>';
      die();
  }

  $resultat = $resultats->fetch(PDO::FETCH_ASSOC);

  // la fonction retourne le tableau associatif 
  // contenant les champs et leurs valeurs
  $indice_trouve= array();
  foreach($resultat as $indice_number => $value){
    if ($value==1){
      $indice_trouve= array_merge($indice_trouve, [$indice_number => $value]);
    }
}
$indice_hasard = array_rand($indice_trouve, 1);
$req2 = 'UPDATE db_adventure SET '.$indice_hasard.'= NULL WHERE equipe_id ='.$ekip_id.'';
  try {
    $insert = $mabd->query($req2);
  } catch (PDOException $e) {
      // s'il y a une erreur, on l'affiche
      echo '<p>Erreur : ' . $e->getMessage() . '</p>';
      die();
  }
return $indice_hasard;
}

function test_stand($mabd, $ekip_id){
  $req = 'SELECT total_indice	FROM db_adventure WHERE equipe_id ='.$ekip_id.'';
  try {
    $resultat = $mabd->query($req);
  } catch (PDOException $e) {
      // s'il y a une erreur, on l'affiche
      echo '<p>Erreur : ' . $e->getMessage() . '</p>';
      die();
  }
  foreach($resultat as $value){
    if ($value['total_indice']==5 or $value['total_indice']==11 or $value['total_indice']==17 or $value['total_indice']==23 or $value['total_indice']==29){
      $req2 = 'SELECT stand_1, stand_2, stand_3, stand_4, stand_5 FROM db_adventure WHERE equipe_id ='.$ekip_id.'';
      try {
        $resultats2 = $mabd->query($req2);
      } catch (PDOException $e) {
          // s'il y a une erreur, on l'affiche
          echo '<p>Erreur : ' . $e->getMessage() . '</p>';
          die();
      }

      $resultat2 = $resultats2 ->fetch(PDO::FETCH_ASSOC);

      // la fonction retourne le tableau associatif 
      // contenant les champs et leurs valeurs
      $stand_no= array();
      foreach($resultat2 as $indice_number => $value2){
        if ($value2==NULL){
          $stand_no= array_merge($stand_no, [$indice_number => $value2]);
          $stand_hasard = array_rand($stand_no, 1);
          if ($stand_hasard=='stand_1'){
            return 'B';
          }
          if ($stand_hasard=='stand_2'){
            return 'K';
          }
          if ($stand_hasard=='stand_3'){
            return 'M';
          }
          if ($stand_hasard=='stand_4'){
            return 'V';
          }
          if ($stand_hasard=='stand_5'){
            return 'T';
          }
        }
    }
    }
  }
}
