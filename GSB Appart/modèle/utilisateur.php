<?php

Class utilisateur{
    private $idUtilisateur;
    private $nom;
    private $prenom;
    private $Adresse;
    private $codeVille;
    private $Telephone;
    private $logins;
    private $email;
    private $mdp;
    private $dateVisite;

    public function __construct($idUtilisateur, $nom, $prenom, $Adresse, $codeVille, $Telephone, $logins, $email, $mdp, $dateVisite){
        $this->idUtilisateur = $idUtilisateur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->Adresse = $Adresse;
        $this->codeVille = $codeVille;
        $this->Telephone = $Telephone;
        $this->logins= $logins;
        $this->email=$email;
        $this->mdp=$mdp;
        $this->dateVisite=$dateVisite;
    }

    public function getidUtilisateur(){
        return $this->idUtilisateur;
    }

    public function getnom(){
        return $this->nom;
    }

    public function getprenom(){
        return $this->prenom;
    }

    public function getAdresse(){
        return $this->Adresse;
    }

    public function getCodeVille(){
        return $this->codeVille;
    }

    public function getTelephone(){
        return $this->Telephone;
    }
    
    public function getlogins(){
        return $this->logins;
    }

    public function getemail(){
        return $this->email;
    }

    public function getmdp(){
        return $this->mdp;
    }
    public function getdateVisite(){
        return $this->dateVisite;
    }

    public function setidUtilisateur($idUtilisateur){
        $this->idUtilisateur = $idUtilisateur;
    } 
    
    public function setnom($nom){
        $this->nom = $nom;
    }
    public function setprenom($prenom){
        $this->prenom = $prenom;
    }

    public function setAdresse($Adresse){
        $this->Adresse = $Adresse;
    }

    public function setCodeVille($codeVille){
        $this->codeVille = $codeVille;
    }

    public function setTelephone($Telephone){
        $this->Telephone = $Telephone;
    }

    public function setlogins($logins){
        $this->Login = $logins;
    }

    public function setemail($email){
        $this->email = $email;
    }

    public function setmdp($mdp){
        $this->mdp = $mdp;
    }
    public function setdateVisite($dateVisite){
        $this->dateVisite = $dateVisite;
    }
}