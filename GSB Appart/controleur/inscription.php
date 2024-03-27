<?php

include_once "modèle/authentification.php";
include_once "modèle/utilisateurDAO.php";
include_once "modèle/utilisateur.php";

$dao=new utilisateurDAO();
    $utilisateurDAO=$dao->getUtilisateurs();
    foreach ($utilisateurDAO as $u){
        $listeUtilisateurs[] = array(
            "logins" => $u->getlogins(),
        );
}


if(isLoggedOn()){
    include "Vue/LocationAppartement.html.php";
}
else{
    include "Vue/inscription.html.php";
}

if (isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["Adresse"]) && isset($_POST["codeVille"]) && isset($_POST["Telephone"]) && isset($_POST["logins"]) && isset($_POST["email"]) && isset($_POST["mdp"]) && isset($_POST["dateVisite"])) {
    $idUtilisateur = $dao-> Maxid()+1; 
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $Adresse = $_POST["Adresse"];
    $codeVille = $_POST["codeVille"];
    $Telephone = $_POST["Telephone"];
    $logins = $_POST["logins"];
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];
    $dateVisite = $_POST["dateVisite"];

    $utilisateur = new Utilisateur($idUtilisateur, $nom, $prenom, $Adresse, $codeVille, $Telephone, $logins, $email, $mdp, $dateVisite);
    $dao->ajoutUtilisateur($utilisateur);

    login($logins, $mdp);

    header('Location: ./?action=connexion');

ob_end_flush();
}