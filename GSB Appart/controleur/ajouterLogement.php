<?php 

//inclure tous les autres fichiers du modèle
include_once "modèle/utilisateurDAO.php";
include_once "modèle/AppartementDAO.php";
include_once "modèle/Appartement.php";
include_once "modèle/utilisateur.php";


$dao = new UtilisateurDAO();
$daoAppartement = new AppartementDAO();


include "Vue/ajouter.html.php";

    if(isset($_POST['typAppart']) && isset($_POST['Prix_Loc']) && isset($_POST['Prix_Charg']) && isset($_POST['rue']) && isset($_POST['codeVille']) && isset($_POST['Etage']) && isset($_POST['Ascenseur']) && isset($_POST['Date_Libre']) && isset($_POST['nbChambre']) && isset($_POST['nbSalleBain']) && isset($_POST['Desc'])){
        //On va faire un nouvel id pour le logement
        $numAppart = $daoAppartement->getNextId();
        $typAppart = $_POST['typAppart'];
        $Prix_Loc = $_POST['Prix_Loc'];
        $Prix_Charg = $_POST['Prix_Charg'];
        $rue = $_POST['rue'];
        $codeVille = $_POST['codeVille'];
        $Etage = $_POST ['Etage'];
        $Ascenseur = $_POST['Ascenseur'];
        $Date_Libre = $_POST['Date_Libre'];
        $nbChambre = $_POST ['nbChambre'];
        $nbSalleBain = $_POST['nbSalleBain'];
        $Desc = $_POST['Desc']; 
        
    
        //on va vérifier si il y a des étages
        if(isset($_POST['etageCheckBox'])){
            $etage = $_POST['etageNumber'];
            //on va vérifier si il y a un ascenseur
            if(isset($_POST['ascenseur'])){
                $ascenseur = 1;
            }else{
                $ascenseur = 0;
            }
        }
        else{
            $etage = 0;
            $ascenseur = 0;
        }

        
        $idProprietaire=$dao->getUtilisateurByLogin($_SESSION['login'])->getidUtilisateur();

        //on va créer un nouvel logement
        $appartement = new Appartement($numAppart, $typAppart, $Prix_Loc, $Prix_Charg, $rue, $codeVille, $Etage, $Ascenseur, $Date_Libre, $nbChambre, $nbSalleBain, $Desc, $idProprietaire);
    
        //on va ajouter le logement dans la base de données
        $daoAppartement->ajoutAppartement($appartement);
    
        //on va rediriger l'utilisateur vers la page de menu principal
        header('Location: ./?action=menuPrincipalProprietaire');
    
    
    }
