<?php
include_once("modèle/connexionPDO.php");
include_once("modèle/utilisateur.php");
include_once("modèle/utilisateurDAO.php");
include_once("modèle/authentification.php");

$dao=new utilisateurDAO();
    $utilisateurDAO=$dao->getUtilisateurs();
    foreach ($utilisateurDAO as $u){
        $listeutilisateurs[] = array(
        "login"=> $u->getlogins(),
        "mdp"=> $u->getmdp()
        );
}

if(isset($_POST['login'])&&isset($_POST['mdp'])){
    $login = $_POST['login'];
    $mdp = $_POST['mdp'];
}else{
    $login = "";
    $mdp = "";
}
login($login, $mdp);

if(isLoggedOn()){
    include "Vue/LocationAppartement.html.php";
}else{
    include "Vue/connexion.html.php";
}