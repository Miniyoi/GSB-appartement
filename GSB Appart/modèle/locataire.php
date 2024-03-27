<?php
class locataire{
    private $Date_Naiss;
    private $Num_Cpte_Banque;
    private $Banque;
    private $Rue_Banque;
    private $CodeVille_Banque;
    private $Tel_Banque;

    public function  __construct($Date_Naiss, $Num_Cpte_Banque, $Banque, $Rue_Banque, $CodeVille_Banque, $Tel_Banque){
        $this->Date_Naiss = $Date_Naiss;
        $this->Num_Cpte_Banque = $Num_Cpte_Banque;
        $this->Banque = $Banque;
        $this->Rue_Banque = $Rue_Banque;
        $this->CodeVille_Banque = $CodeVille_Banque;
        $this->Tel_Banque = $Tel_Banque;
    }

    public function getDate_Naiss(){
        return $this->Date_Naiss;
    }
    public function getNum_Cpte_Banque(){
        return $this->Num_Cpte_Banque;
    }
    public function getBanque(){
        return $this->Banque;
    }
    public function getRue_Banque(){
        return $this->Rue_Banque;
    }
    public function getCodeVille_Banque(){
        return $this->CodeVille_Banque;
    }
    public function getTel_Banque(){
        return $this->Tel_Banque;
    }

    public function setDate_Naiss($Date_Naiss){
        $this->Date_Naiss = $Date_Naiss;
    }
    public function setNum_Cpte_Banque($Num_Cpte_Banque){
        $this->Num_Cpte_Banque = $Num_Cpte_Banque;
    }
    public function setBanque($Banque){
        $this->Banque = $Banque;
    }
    public function setRue_Banque($Rue_Banque){
        $this->Rue_Banque = $Rue_Banque;
    }
    public function setCodeVille_Banque($CodeVille_Banque){
        $this->CodeVille_Banque = $CodeVille_Banque;
    }
    public function setTel_Banque($Tel_Banque){
        $this->Tel_Banque = $Tel_Banque;
    }
}