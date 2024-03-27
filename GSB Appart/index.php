<?php
session_start();

include "controleur/controleurPrincipal.php";
include_once "modèle/authentification.php";

if(isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "defaut";
}

$fichier = controleurprincipal($action);
print_r($fichier);
include "controleur/$fichier";