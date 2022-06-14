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

} else{
    // page indice sans ?id
    //echo "<h1>Vous êtes sur la page Indice, des QrCodes sont cachés un peu partout dans l'IUT (pas d'id selectionné)</h1>";
}
}