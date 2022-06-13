<?php
  // LIBRAIRIE "lib_crud.inc.php"
  // 2022 - BUT MMI - IUT Troyes - URCA
  // MMI ADVENTURE

  // insertion des dépendances
  require 'secretxyz123.inc.php';

// connexion à la base de données
function connexion_resort()
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
function deconnexion_resort(&$mabd) {
    // on se déconnexte en mettant la variable de connexion à null 
    $mabd=null;
}