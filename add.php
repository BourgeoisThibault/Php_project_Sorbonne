<?php

session_start();


if(!isset($_GET['num'])) {
    header('Location: error.php?motif=Aucun ID trouvé');
	exit();
}

if(!isset($_SESSION['connected'])) {
    header('Location: error.php?motif=Veuillez vous connecter');
	exit();
}

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=pokedek;charset=utf8', 'root', '');
}
catch (Exception $e)
{
	header('Location: error.php?motif=Problème connexion BDD');
	exit();
}

$reponse = $bdd->query("SELECT * FROM pokemon WHERE id = ".$_GET['num']);

// On affiche chaque entrée une à une
$donnees = $reponse->fetch();

if(empty($donnees)){
    header('Location: error.php?motif=Erreur ajout au panier');
	exit();
}else{
	
	if (!isset($_SESSION['panier'])){
      $_SESSION['panier']=array();
   }
   
   array_push( $_SESSION['panier'],$donnees['id']);
	
	header('Location: index.php');
}
?>

