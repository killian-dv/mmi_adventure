<?php
  // LIBRAIRIE "lib_crud.inc.php"
  // 2022 - BUT MMI - IUT Troyes - URCA
  // MMI ADVENTURE

  // insertion des dépendances
  require 'secretxyz123.inc.php';

// connexion à la base de données
function connexion_mmi_adventure()
{
    // on initialise la variable de connexion à null
    $mabd = null;
    try {
    // on essaie de se connecter
    // le port et le dbname ci-dessous sont À ADAPTER à vos données
    $mabd = new PDO('mysql:host=localhost;dbname=;charset=UTF8;', LUTILISATEUR, LEMOTDEPASSE);
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
    if ($indice_id == "3s8e8RYax3QD9Q") { echo "<h1>Indice 1</h1>";}
    // indice n°2
    if ($indice_id == "URAVnis5Ej55ka") { echo "<h1>Indice 1</h1>";}
    // indice n°3
    if ($indice_id == "KEwBhcT4NRPi4e") { echo "<h1>Indice 1</h1>";}
    // indice n°4
    if ($indice_id == "MP5jZvdqmZpUKc") { echo "<h1>Indice 1</h1>";}
    // indice n°5
    if ($indice_id == "43KLnZYRGJaTph") { echo "<h1>Indice 1</h1>";}
    // indice n°6
    if ($indice_id == "uVqWQT944J69Qn") { echo "<h1>Indice 1</h1>";}
    // indice n°7
    if ($indice_id == "zBkWrW2gw9CWGG") { echo "<h1>Indice 1</h1>";}
    // indice n°8
    if ($indice_id == "JbxcUSq5a6M3tf") { echo "<h1>Indice 1</h1>";}
    // indice n°9
    if ($indice_id == "ocSD7SmpU5Ydb7") { echo "<h1>Indice 1</h1>";}
    // indice n°10
    if ($indice_id == "bfw8KCJMhBxyzi") { echo "<h1>Indice 1</h1>";}
    // indice n°11
    if ($indice_id == "2r9nHDWBnkhT6o") { echo "<h1>Indice 1</h1>";}
    // indice n°12
    if ($indice_id == "x457MNk4yLubaR") { echo "<h1>Indice 1</h1>";}
    // indice n°13
    if ($indice_id == "jUQqb5BAFRx8aa") { echo "<h1>Indice 1</h1>";}
    // indice n°14
    if ($indice_id == "ts8WzX2Kzfs9VS") { echo "<h1>Indice 1</h1>";}
    // indice n°15
    if ($indice_id == "obrHTUxBCux3YJ") { echo "<h1>Indice 1</h1>";}
    // indice n°16
    if ($indice_id == "Q4vP5TG5vhjUeU") { echo "<h1>Indice 1</h1>";}
    // indice n°17
    if ($indice_id == "U2UMirtsvigjcr") { echo "<h1>Indice 1</h1>";}
    // indice n°18
    if ($indice_id == "xF5osYnd6qc8jw") { echo "<h1>Indice 1</h1>";}
    // indice n°19
    if ($indice_id == "BZbdXCP67faRnf") { echo "<h1>Indice 1</h1>";}
    // indice n°20
    if ($indice_id == "8pVTu8vn4h5eH5") { echo "<h1>Indice 1</h1>";}
    // indice n°21
    if ($indice_id == "DkJ9BerWWoLDUh") { echo "<h1>Indice 1</h1>";}
    // indice n°22
    if ($indice_id == "vd6k6CLB4G2NwC") { echo "<h1>Indice 1</h1>";}
    // indice n°23
    if ($indice_id == "BPi2Tg2uFWqyuD") { echo "<h1>Indice 1</h1>";}
    // indice n°24
    if ($indice_id == "o54CJ4rMyVftbE") { echo "<h1>Indice 1</h1>";}
    // indice n°25
    if ($indice_id == "u6ktLfJ3AU9RYD") { echo "<h1>Indice 1</h1>";}
    // indice n°26
    if ($indice_id == "9heHYNZC762tBh") { echo "<h1>Indice 1</h1>";}
    // indice n°27
    if ($indice_id == "ZNLLQezUcQg6b3") { echo "<h1>Indice 1</h1>";}
    // indice n°28
    if ($indice_id == "JHgiU2uiQvhP8g") { echo "<h1>Indice 1</h1>";}
    // indice n°29
    if ($indice_id == "uhj7UpjvdG8fyM") { echo "<h1>Indice 1</h1>";}
    // indice n°30
    if ($indice_id == "SBuR98KQCQwaZ2") { echo "<h1>Indice 1</h1>";}
    

    // piège 1
    if ($indice_id == "MXhiUDdRPy65h7") { echo "<h1>Indice 1</h1>";}
    // piège 2
    if ($indice_id == "rYF9Nr3wKHCead") { echo "<h1>Indice 1</h1>";}

    // stand 1
    if ($indice_id == "RAR4xEWfvU6iVJ") { echo "<h1>Indice 1</h1>";}
    // stand 2
    if ($indice_id == "5Mtvpwb9HGHT2h") { echo "<h1>Indice 1</h1>";}
    // stand 3
    if ($indice_id == "hAoKC7wQjihYP2") { echo "<h1>Indice 1</h1>";}
    // stand 4
    if ($indice_id == "MNGM3Fa9SYf42h") { echo "<h1>Indice 1</h1>";}
    // stand 5
    if ($indice_id == "B5UdgrWx4a8SiM") { echo "<h1>Indice 1</h1>";}
} else{
    // page indice sans ?id
    //echo "<h1>Vous êtes sur la page Indice, des QrCodes sont cachés un peu partout dans l'IUT (pas d'id selectionné)</h1>";
}
}