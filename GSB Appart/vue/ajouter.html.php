<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajout de location</title>
</head>
<body>
    <h2>Ajouter un appartement</h2>
    <form action="./?action=Ajouter" method="post">
        <div class ="appart">

        <p>Type d'appartement:</p>
        <input id="Formulaire" type="text" name="typAppart" placeholder="typAppart">

        <p>Prix_Loc:</p>
        <input id="Formulaire" type="number" name="Prix_Loc"  placeholder="Prix_Loc">

        <p>Prix_Charg:</p>
        <input id ="Formulaire" type="number" name="Prix_Charg" placeholder="Prix_Charg">

        <p>rue</p>
        <input id="Formulaire" type="text" name="rue" placeholder="rue">

        <p>codeVille</p>
        <input id="Formulaire" type="text" name="codeVille" placeholder="codeVille">

        <p>Etage</p>
        <input id="Formulaire" type="numbre" name="Etage" placeholder="Etage">
        
        <p>Ascenseur</p>
        <select id="Ascenseur" name="Ascenseur">
            <option value ="oui">Oui</option>
            <option value ="non">Non</option>
        </select>
        
        <p>Date_Libre</p>
        <input id="Formulaire" type="Date" name="Date_Libre" placeholder="Date_Libre">

        <p>Nombre de Chambre</p>
        <input id="Formulaire" type="number" name="nbChambre" placeholder="nbChambre">

        <p>Nombre de Salle de bain</p>
        <input id="Formulaire" type ="number" name="nbSalleBain" placeholder="nbSalleBain">
        
        <p>Description</p>
        <textarea id="Formulaire" name="Desc" placeholder="Description"></textarea>
        <br>
        <input type="submit" value="Ajouter">
    </form>
</body>
</html>