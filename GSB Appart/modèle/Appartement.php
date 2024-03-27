<?php
Class Appartement{
    private $idProprietaire;
    private $numAppart;
    private $typAppart;
    private $Prix_Loc;
    private $Prix_Charg;
    private $rue;
    private $codeVille;
    private $Etage;
    private $Ascenseur;
    private $Date_Libre;
    private $nbChambre;
    private $nbSalleBain;
    private $Desc;

    public function __construct($idProprietaire,$numAppart, $typAppart, $Prix_Loc, $Prix_Charg, $rue, $codeVille, $Etage, $Ascenseur, $Date_Libre, $nbChambre, $nbSalleBain, $Desc){
        $this->id_Proprietaire=$idProprietaire;
        $this->numAppart=$numAppart;
        $this->typAppart=$typAppart;
        $this->Prix_Loc=$Prix_Loc;
        $this->Prix_Charg=$Prix_Charg;
        $this->rue=$rue;
        $this->codeVille=$codeVille;
        $this->Etage=$Etage;
        $this->Ascenseur=$Ascenseur;
        $this->Date_Libre=$Date_Libre;
        $this->nbChambre=$nbChambre;
        $this->nbSalleBain=$nbSalleBain;
        $this->Desc=$Desc;
    }
    
    public function getidProprietaire(){
        return $this->idProprietaire;
    }
    public function getnumAppart(){
        return $this->numAppart;
    }
    public function gettypAppart(){
        return $this->typAppart;
    }
    public function getPrix_Loc(){
        return $this->Prix_Loc;
    }
    public function getPrix_Charg(){
        return $this->Prix_Charg;
    }
    public function getrue(){
        return $this->rue;
    }
    public function getcodeVille(){
        return $this->codeVille;
    }
    public function getEtage(){
        return $this->Etage;
    }
    public function getAscenseur(){
        return $this->Ascenseur;
    }
    public function getDate_Libre(){
        return $this->Date_Libre;
    }
    public function getnbChambre(){
        return $this->nbChambre;
    }
    public function getnbSalleBain(){
        return $this->nbSalleBain;
    }
    public function getDesc(){
        return $this->Desc;
    }

    public function setidProprietaire($idProprietaire){
        $this->id_Proprietaire=$idProprietaire;
    }
    public function setnumAppart($numAppart){
        $this->numAppart=$numAppart;
    }
    
    public function settypAppart($typeAppart){
        $this->typeAppart=$typeAppart;
    }
    
    public function setPrix_Loc($Prix_Loc){
        $this->Prix_Loc=$Prix_Loc;
    }
    public function setPrix_Charg($Prix_Charg){
        $this->Prix_Charg=$Prix_Charg;
    }
    public function setrue($rue){
        $this->rue=$rue;
    }
    
    public function setcodeVille($codeVille){
        $this->codeVille=$codeVille;
    }

    public function setEtage($Etage){
        $this->Etage=$Etage;
    }
    public function setAscenseur($Ascenseur){
        $this->Ascenseur=$Ascenseur;
    }
    public function setDate_Libre($Date_Libre){
        $this->Date_Libre=$Date_Libre;
    }
    public function setnbChambre($nbChambre){
        $this->nbChambre=$nbChambre;
    }
    public function setnbSalleBain($nbSalleBain){
        $this->nbSalleBain=$nbSalleBain;
    }
    public function setDesc($Desc){
        $this->Desc=$Desc;
    }
}