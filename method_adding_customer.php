<?php

session_start();

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=pokedek;charset=utf8', 'esibank', 'esibankpds');
}
catch (Exception $e)
{
	header('Location: error.php?motif=Problème connexion BDD');
	exit();
}

echo $_POST['nom'];

$stmt = $bdd->prepare("INSERT INTO users (nom, prenom, mail, pseudo, password, naissance) VALUES (:nom, :prenom, :mail, :pseudo, :password, :naissance)");

$stmt->bindParam(':nom', $_POST['nom']);
$stmt->bindParam(':prenom', $_POST['prenom']);
$stmt->bindParam(':mail', $_POST['mail']);
$stmt->bindParam(':pseudo', $_POST['pseudo']);
$stmt->bindParam(':password', $_POST['password']);
$stmt->bindParam(':naissance', $_POST['naissance']);

$stmt->execute();

if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
   }
	
	$_SESSION['connected'] = true;
	$_SESSION['nom'] = $_POST['nom'];
	$_SESSION['prenom'] = $_POST['prenom'];
	$_SESSION['pseudo'] = $_POST['pseudo'];
	$_SESSION['mail'] = $_POST['mail'];
	$_SESSION['naissance'] = $_POST['naissance'];
	header('Location: index.php');

header('Location: index.php');

?>

