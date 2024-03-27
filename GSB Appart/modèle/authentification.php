<?php
include_once 'connexionPDO.php';
include_once 'utilisateurDAO.php';

function login($login,$mdp){
    if(!isset ($_SESSION)) {
        session_start();
    }
    $utilisateurDAO = new utilisateurDAO();
    $utilisateur=$utilisateurDAO->getUtilisateurByLogin($login);
    if($utilisateur){
        $mdpBD = $utilisateur->getmdp();//IMPOSSIBLE DE TROUVER LE MDP DU VISITEUR

        if(trim($mdpBD) == trim($mdp)) {
            //le mdp est celui de l'user dans la bd
            $_SESSION["login"] = $login;
            $_SESSION["mdp"] = $mdp;
        }
    }
}

function logout(){
    if(!isset ($_SESSION)) {
        session_start();
    }
    unset ($_SESSION["login"]);
    unset ($_SESSION["mdp"]);
}

function getLoggedOn(){
    if (isLoggedOn()) {
        $ret = $_SESSION["login"];
    }else{
    $ret = "";
    }
    return $ret;
}

function isLoggedOn(){
    $ret = false;
    if (isset($_SESSION["login"])) {
        $utilisateurDAO = new utilisateurDAO();
        $utilisateur = $utilisateurDAO->getUtilisateurByLogin($_SESSION["login"]);
        if ($utilisateur->getlogins()==$_SESSION["login"] && $utilisateur->getmdp()==$_SESSION["mdp"]) {
            $ret = true;
        }
    }
    return $ret;
}