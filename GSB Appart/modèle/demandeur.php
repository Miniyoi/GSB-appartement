<?php
class demandeur extends utilisateur{

    public function __construct($idUtilisateur, $nom, $prenom, $Adresse, $codeVille, $Telephone, $Login, $email, $mdp, $dateVisite){
        parent::__construct($idUtilisateur, $nom, $prenom, $Adresse, $codeVille, $Telephone, $Login, $email, $mdp, $dateVisite);
    }
    
}