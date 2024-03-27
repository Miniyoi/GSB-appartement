<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="vue/register.css">
    <title>Inscription</title>
</head>
<body>
   <div class="contenair">
        <div>
            <h1>Formulaire d'inscription</h1>
            <form action="?action=Inscription" method="post">
                <div class ="register">
                    <p>Nom</p>
                    <input id ="Formulaire" type="text" name="nom" placeholder="Nom"/>

                    <p>Prenom</p>
                    <input id ="Formulaire" type="text" name="prenom" placeholder="Prenom"/>

                    <p>Adresse</p>
                    <input id ="Formulaire" type="text" name="Adresse" placeholder="Adresse"/>

                    <p>Code Ville </p>
                    <input id ="Formulaire" type="text" name="codeVille" placeholder="codeVille"/>
                
                    <p>Telephone <p>
                    <input id ="Formulaire" type="text" name="Telephone" placeholder="Telephone"/>

                    <p>Nom du login </p>
                    <input id="Formulaire" type="texte" name="logins" placeholder="logins">
                    
                    <p>email </p>
                    <input id ="Formulaire" type="text" name="email" placeholder="email"/>

                    <p>Mot de passe </p>
                    <input id ="Formulaire" type="password" name="mdp" placeholder="mdp"/>

                    <p>Date d'embauche :</p>
                    <input id="Formulaire" type="date"  name="dateVisite">
                    <br>
                    <input type="submit" value="S'inscrire">
                    <button id="connecter"><a href="./index.php?action=connexion">Se connecter</a></button>
                </div>
            </form>
        </div>    
</body>
</html>
