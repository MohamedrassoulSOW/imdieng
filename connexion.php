<?php include'function.php' ?>

<?php 
			if(isset($_POST['connexion'])){
				Users()(
					$_POST['email'],
					$_POST['mdp']
				);
			}
			
		?>

<?php 
			if(isset($_POST['inscription'])){
				inscrireUtilisateur(
					$_POST['nom'],
					$_POST['prenom'],
					$_POST['email'],
					$_POST['mdp']
				);
			}
			
		?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="page-inscrire">
    <form action="login.php" method="POST">
        <h3>Connexion</h3>
        <hr>
        <label for="">Adress Mail</label>
        <input type="email" name="email">
        <label for="">Mot de Passe</label>
        <input type="password" name="mdp">
        <input type="submit" value="Se connecter" name="connexion">
        <p>Si vous n'avez pas de compte ? Veillez vous <a href="inscription.php">S'inscrire'</a></p>
    </form>

</body>
</html>