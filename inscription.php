<?php include'function.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Inscription</title>
</head>
<body class="page-inscrire">
    <form action="connexion.php" method="post">
        <h3>INSCRIPTION</h3>
        <hr>
        <div class="name-field">
            <div class="">
                <label for="">Nom</label>
                <input type="text" name="nom">
            </div>
            <div class="">
                <label for="">Prenom</label>
                <input type="text" name="prenom">
            </div>
        </div>
        <label for="">Adress Mail</label>
        <input type="email" name="email">
        <label for="">Mot de Passe</label>
        <input type="password" name="mdp">
        <input type="submit" value="S'inscrire" name="inscription">
        <p>Vous avez déjà un compte ? <a href="connexion.php">Se connecter</a></p>
    </form>

</body>
</html>