<?php
  // LIBRAIRIE "lib_crud.inc.php"
  // 2022 - BUT MMI - IUT Troyes - URCA
  // MMI ADVENTURE

  // insertion des dépendances
  require 'secretxyz123.php';

// connexion à la base de données
function connexion_mmi_adventure()
{
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
      $anecdote = 'Vous vous trouvez dans le studio, c\'est ici que vous allez tourner de petites vidéos avec les caméras situées dans la petite pièce avec la vitre. Attention, ne tentez pas de voler quelque chose, cette pièce est sous vidéo surveillance.';
    }
    // indice n°2
    if ($indice_id == "URAVnis5Ej55ka") { 
      $numero_indice=2;
      $bdd_indice="indice_2";
      $anecdote = 'lalalalala';
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
      $anecdote = 'lalalalala';
    }
    // indice n°6
    if ($indice_id == "uVqWQT944J69Qn") { 
      $numero_indice=6;
      $bdd_indice="indice_6";
      $anecdote = 'lalalalala';
    }
    // indice n°7
    if ($indice_id == "zBkWrW2gw9CWGG") { 
      $numero_indice=7;
      $bdd_indice="indice_7";
      $anecdote = 'lalalalala';
    }
    // indice n°8
    if ($indice_id == "JbxcUSq5a6M3tf") { 
      $numero_indice=8;
      $bdd_indice="indice_8";
      $anecdote = 'lalalalala';
    }
    // indice n°9
    if ($indice_id == "ocSD7SmpU5Ydb7") { 
      $numero_indice=9;
      $bdd_indice="indice_9";
      $anecdote = 'lalalalala';
    }
    // indice n°10
    if ($indice_id == "bfw8KCJMhBxyzi") { 
      $numero_indice=10;
      $bdd_indice="indice_10";
      $anecdote = 'lalalalala';
    }
    // indice n°11
    if ($indice_id == "2r9nHDWBnkhT6o") { 
      $numero_indice=11;
      $bdd_indice="indice_11";
      $anecdote = 'lalalalala';
    }
    // indice n°12
    if ($indice_id == "x457MNk4yLubaR") { 
      $numero_indice=12;
      $bdd_indice="indice_12";
      $anecdote = 'lalalalala';
    }
    // indice n°13
    if ($indice_id == "jUQqb5BAFRx8aa") { 
      $numero_indice=13;
      $bdd_indice="indice_13";
      $anecdote = 'lalalalala';
    }
    // indice n°14
    if ($indice_id == "ts8WzX2Kzfs9VS") { 
      $numero_indice=14;
      $bdd_indice="indice_14";
      $anecdote = 'lalalalala';
    }
    // indice n°15
    if ($indice_id == "obrHTUxBCux3YJ") { 
      $numero_indice=15;
      $bdd_indice="indice_15";
      $anecdote = 'lalalalala';
    }
    // indice n°16
    if ($indice_id == "Q4vP5TG5vhjUeU") { 
      $numero_indice=16;
      $bdd_indice="indice_16";
      $anecdote = 'lalalalala';
    }
    // indice n°17
    if ($indice_id == "U2UMirtsvigjcr") { 
      $numero_indice=17;
      $bdd_indice="indice_17";
      $anecdote = 'lalalalala';
    }
    // indice n°18
    if ($indice_id == "xF5osYnd6qc8jw") { 
      $numero_indice=18;
      $bdd_indice="indice_18";
      $anecdote = 'lalalalala';
    }
    // indice n°19
    if ($indice_id == "BZbdXCP67faRnf") { 
      $numero_indice=19;
      $bdd_indice="indice_19";
      $anecdote = 'lalalalala';
    }
    // indice n°20
    if ($indice_id == "8pVTu8vn4h5eH5") { 
      $numero_indice=20;
      $bdd_indice="indice_20";
      $anecdote = 'lalalalala';
    }
    // indice n°21
    if ($indice_id == "DkJ9BerWWoLDUh") { 
      $numero_indice=21;
      $bdd_indice="indice_21";
      $anecdote = 'lalalalala';
    }
    // indice n°22
    if ($indice_id == "vd6k6CLB4G2NwC") { 
      $numero_indice=22;
      $bdd_indice="indice_22";
      $anecdote = 'lalalalala';
    }
    // indice n°23
    if ($indice_id == "BPi2Tg2uFWqyuD") { 
      $numero_indice=23;
      $bdd_indice="indice_23";
      $anecdote = 'lalalalala';
    }
    // indice n°24
    if ($indice_id == "o54CJ4rMyVftbE") { 
      $numero_indice=24;
      $bdd_indice="indice_24";
      $anecdote = 'lalalalala';
    }
    // indice n°25
    if ($indice_id == "u6ktLfJ3AU9RYD") { 
      $numero_indice=25;
      $bdd_indice="indice_25";
      $anecdote = 'lalalalala';
    }
    // indice n°26
    if ($indice_id == "9heHYNZC762tBh") { 
      $numero_indice=26;
      $bdd_indice="indice_26";
      $anecdote = 'lalalalala';
    }
    // indice n°27
    if ($indice_id == "ZNLLQezUcQg6b3") { 
      $numero_indice=27;
      $bdd_indice="indice_27";
      $anecdote = 'lalalalala';
    }
    // indice n°28
    if ($indice_id == "JHgiU2uiQvhP8g") { 
      $numero_indice=28;
      $bdd_indice="indice_28";
      $anecdote = 'lalalalala';
    }
    // indice n°29
    if ($indice_id == "uhj7UpjvdG8fyM") { 
      $numero_indice=29;
      $bdd_indice="indice_29";
      $anecdote = 'lalalalala';
    }
    // indice n°30
    if ($indice_id == "SBuR98KQCQwaZ2") { 
      $numero_indice=30;
      $bdd_indice="indice_30";
      $anecdote = 'lalalalala';
    }
    

    // piège 1
    if ($indice_id == "MXhiUDdRPy65h7") { 
      $numero_indice="piege";
      $bdd_indice="piege_1";
      $anecdote = 'Vous venez de scanner un QRCode qui n\'est pas sur la carte. Vous devez donc re-scanner le QRCode n°';
    }
    // piège 2
    if ($indice_id == "rYF9Nr3wKHCead") { 
      $numero_indice="piege";
      $bdd_indice="piege_2";
      $anecdote = 'Vous venez de scanner un QRCode qui n\'est pas sur la carte. Vous devez donc re-scanner le QRCode n°';
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
    if ($value ['nom_equipe']==$ekip_name){
      return true;
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