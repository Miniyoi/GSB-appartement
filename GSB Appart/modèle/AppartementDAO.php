<?php
class AppartementDAO {

    private $conn;

    public function __construct(){
        $pdo = new connexionPDO();
        $this->conn = $pdo->getConn();
    }

    public function ajoutAppartement($Appartement){
        try{
        $req = $this->conn->prepare("INSERT INTO appartement (idProprietaire, numAppart, typAppart, Prix_Loc, Prix_Charg, rue, codeVille, Etage, Ascenseur, Date_Libre, nbChambres, nbSalleBain, Desc) values (:idProprietaire, :numAppart, :typeAppart, :Prix_Loc, :Prix_Charg, :rue, :codeVille, :Etage, :Ascenseur, :Date_Libre, :nbChambre, :nbSalleBain, :Desc)");
        $req -> bindValue(':idProprietaire',$Appartement->getidProprietaire());
        $req -> bindValue(':numAppart',$Appartement->getnumAppart());
        $req -> bindValue(':typeAppart',$Appartement->gettypAppart());
        $req -> bindValue(':Prix_Loc',$Appartement->getPrix_loc());
        $req -> bindValue(':Prix_Charg',$Appartement->getPrix_Charg());
        $req -> bindValue(':rue',$Appartement->getrue());
        $req -> bindValue(':codeVille',$Appartement->getcodeVille());
        $req -> bindValue(':Etage',$Appartement->getEtage());
        $req -> bindValue(':Ascenseur',$Appartement->getAscenseur());
        $req -> bindValue(':Date_Libre',$Appartement->getDate_Libre());
        $req -> bindValue(':nbChambre',$Appartement->getnbChambre());
        $req -> bindValue(':nbSalleBain',$Appartement->getnbSalleBain());
        $req -> bindValue(':Desc',$Appartement->getDesc());
        $req->execute();
        }catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    public function updateAppartement($Appartement){
        try{
            $req = $this->conn->prepare("UPDATE appartement SET typeAppart=:typeAppart, Prix_Loc=:Prix_Loc, Prix_Charg=:Prix_Charg, rue=:rue, codeVille=:codeVille, Etage=:Etage, Ascenseur=:Ascenseur, Date_Libre=:Date_Libre, nbChambres=:nbChambre, nbSalleBain=:nbSalleBain, Desc=:Desc WHERE numAppart=:numAppart");
            $req -> bindValue(':numAppart',$Appartement->getnumAppart());
            $req -> bindValue(':typeAppart',$Appartement->gettypeAppart());
            $req -> bindValue(':Prix_Loc',$Appartement->getPrix_loc());
            $req -> bindValue(':Prix_Charg',$Appartement->getPrix_Charg());
            $req -> bindValue(':rue',$Appartement->getrue());
            $req -> bindValue(':codeVille',$Appartement->getcodeVille());
            $req -> bindValue(':Etage',$Appartement->getEtage());
            $req -> bindValue(':Ascenseur',$Appartement->getAscenseur());
            $req -> bindValue(':Date_Libre',$Appartement->getDate_Libre());
            $req -> bindValue(':nbChambre',$Appartement->getnbChambre());
            $req -> bindValue(':nbSalleBain',$Appartement->getnbSalleBain());
            $req -> bindValue(':Desc',$Appartement->getDesc());
            $req->execute();
        }catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    public function deleteAppartement($Appartement){
        try{
            $req = $this->conn->prepare("DELETE FROM appartement WHERE numAppart=:numAppart");
            $req -> bindValue(':numAppart',$Appartement->getnumAppart());
            $req->execute();
        }catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }
    
    public function getAppartements(){
        try{
        $req = $this->conn->prepare("SELECT * FROM appartement");
        $req->execute();
        $result=$req->fetchAll(PDO::FETCH_ASSOC);
        $Appartements = array();
        foreach($result as $appartement){
            $Appartements[] = new appartement($appartement["idProprietaire"], $appartement["numAppart"], $appartement ["typeApaprt"], $appartement ["Prix_Loc"], $appartement ["Prix_Charg"], $appartement["rue"], $appartement["codeVille"], $appartement["Etage"], $appartement["Ascenseur"], $appartement["Date_Libre"], $appartement["nbChambres"], $appartement["nbSalleBain"], $appartement["Desc"]);
        }
        return $Appartements;
    } catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
    }
    public function getNextId(){
        try{
            $req = $this->conn->prepare("SELECT numAppart FROM Appartement");
            $req->execute();

            $resultat=array();
            while($row=$req->fetch(PDO::FETCH_ASSOC)){
                $resultat[]=$row['numAppart'];
            }
            $i=1;
            while(in_array($i, $resultat)){
                $i++;
            }
            return $i;
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }
}