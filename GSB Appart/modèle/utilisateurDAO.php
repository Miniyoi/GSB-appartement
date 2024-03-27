<?php
class utilisateurDAO{
    private $conn;

    public function __construct(){
        $pdo = new connexionPDO();
        $this->conn = $pdo->getConn();
    }
    public function ajoutUtilisateur($utilisateur){
        try{
            $req = $this->conn->prepare("INSERT INTO utilisateur VALUES (:idUtilisateur, :nom, :prenom, :Adresse, :codeVille, :Telephone, :logins, :email, :mdp, :dateVisite)");
            $req -> bindValue(':idUtilisateur',$utilisateur->getidUtilisateur());
            $req -> bindValue(':nom',$utilisateur->getnom());
            $req -> bindValue(':prenom',$utilisateur->getprenom());
            $req -> bindValue(':Adresse',$utilisateur->getAdresse());
            $req -> bindValue(':codeVille',$utilisateur->getcodeVille());
            $req -> bindValue(':Telephone',$utilisateur->getTelephone());
            $req -> bindValue(':logins',$utilisateur->getlogins());
            $req -> bindValue(':email',$utilisateur->getemail());
            $req -> bindValue(':mdp',$utilisateur->getmdp());
            $req -> bindValue(':dateVisite',$utilisateur->getdateVisite());
            $req->execute();
            print_r($req);
        }catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }
    public function deleteUtilisateur($utilisateur){
        try{
            $req = $this->conn->prepare("DELETE FROM utilisateur WHERE idUtilisateur=:idUtilisateur");
            $req -> bindValue(':idUtilisateur',$utilisateur->getidUtilisateur());
            $req->execute();
        }catch (PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }
    public function getUtilisateurs(){
        try{
            
            $req=$this->conn->prepare("SELECT * FROM utilisateur");
            
            $req->execute();
            
            $resultat=$req->fetchAll(PDO::FETCH_ASSOC);
            if($resultat){
                    foreach($resultat as $ligne){
                        $utilisateur = new utilisateur(
                            $ligne["idUtilisateur"],
                            $ligne["nom"],
                            $ligne["prenom"],
                            $ligne["Adresse"],
                            $ligne["codeVille"],
                            $ligne["Telephone"],
                            $ligne["logins"],
                            $ligne["email"],
                            $ligne["mdp"],
                            $ligne["dateVisite"]
                        );
                        $utilisateurs[]=$utilisateur;
                    }
                    return $utilisateurs;
                }
                else{
                return null;
            }
        } catch(PDOException $e){
            print "Erreur !: " . $e->getMessage();
            die();
        }
    }

    public function getUtilisateurByLogin($logins){
        try{
            $req = $this->conn->prepare("SELECT * FROM utilisateur WHERE logins=:logins");
            $req -> bindValue(':logins', $logins);
            
            $req->execute();
            
            $resultat=$req->fetch(PDO::FETCH_ASSOC);
            if($resultat){
                $utilisateur = new utilisateur(
                    $resultat["idUtilisateur"],
                    $resultat["nom"],
                    $resultat["prenom"],
                    $resultat["Adresse"],
                    $resultat["codeVille"],
                    $resultat["Telephone"],
                    $resultat["logins"],
                    $resultat["email"],
                    $resultat["mdp"],
                    $resultat["dateVisite"]
                );
                return $utilisateur;
            }else{  
                return null;
            }
    }catch(PDOException $e){
        print "Erreur !: " . $e->getMessage();
        die();
    }
 }
 public function Maxid() {
    try{
      $req=$this->conn->prepare("SELECT MAX(idUtilisateur) FROM utilisateur");
      $req->execute();



    }catch(PDOException $e){
      print "Erreur !: ". $e->getMessage();
      die();
    }
    $resultat=$req->fetch();
    return $resultat[0];
  }
}

