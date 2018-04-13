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

echo $_POST['nom'];

$stmt = $bdd->prepare("INSERT INTO users (nom, prenom, mail, pseudo, password, naissance) VALUES (:nom, :prenom, :mail, :pseudo, :password, :naissance)");

$stmt->bindParam(':nom', $_POST['nom']);
$stmt->bindParam(':prenom', $_POST['prenom']);
$stmt->bindParam(':mail', $_POST['mail']);
$stmt->bindParam(':pseudo', $_POST['pseudo']);
$stmt->bindParam(':password', $_POST['password']);
$stmt->bindParam(':naissance', $_POST['naissance']);

$stmt->execute();

$_SESSION['my'] = true;
$_SESSION['nom'] = 'toto';

header('Location: index.php');

?>

