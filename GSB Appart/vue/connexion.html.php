<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="vue/connexion.css">
    <title>Connexion</title>
</head>
<body>
    <div class="container">
        <div>
            <h1>Connexion</h1>
            <form method="post" action="./?action=connexion" onsubmit="return validerConnexion();">
                <div class ="Login">
                    <p>Login</p>
                    <input id ="Formulaire" type = "text" name ="login" placeholder="Login"/>
                    <p>Mot de passe </p>
                    <input id="Formulaire" type = "password" name="mdp" placeholder="Mot de passe"/>
                    <br>
                    <input type="submit" value="Se connecter"/>
                    <button id ="inscription"><a href="./index.php?action=Inscription">Inscription</a></button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
