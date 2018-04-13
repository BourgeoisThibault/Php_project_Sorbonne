<?php

session_start();

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=pokedek;charset=utf8', 'esibank', 'esibankpds');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query("SELECT * FROM users WHERE pseudo = '".$_POST['pseudo']."' AND password = '".$_POST['password']."'");

// On affiche chaque entrée une à une
$donnees = $reponse->fetch();

if(empty($donnees)){
    header('Location: delete_session.php');
}else{
	$_SESSION['connected'] = true;
	$_SESSION['nom'] = $donnees['nom'];
	$_SESSION['prenom'] = $donnees['prenom'];
	$_SESSION['pseudo'] = $donnees['pseudo'];
	$_SESSION['mail'] = $donnees['mail'];
	$_SESSION['naissance'] = $donnees['naissance'];
	header('Location: index.php');
}
?>

