<?php
session_start();
function Connexion(){
	try {
	$cnx = new PDO('mysql:host=sql108.infinityfree.com;dbname=if0_37864161_imdieng', "if0_37864161", "Imdieng2024");
	} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
	}
		return $cnx;
}

function Users() {
	$cnx = Connexion();
	$req = $cnx->prepare("SELECT * FROM utilisateurs");
	$req->execute();
	return $req->fetchAll();
}

function inscrireUtilisateur($nom, $prenom, $email, $mdp) {
	$cnx = Connexion();
	$req = $cnx->prepare("INSERT INTO `utilisateurs` (`nom`, `prenom`, `email`, `mdp`, `role`) VALUES(?,?,?,?, 'visiteur')");
	$req->execute(array($nom, $prenom, $email, $mdp));
}

