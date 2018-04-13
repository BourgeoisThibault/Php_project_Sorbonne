<?php

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=pokedek;charset=utf8', 'esibank', 'esibankpds');
	echo "Congratulation";
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM pokemon');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>
    <strong>id</strong> : <?php echo $donnees['id']; ?><br />
    <strong>nom</strong> : <?php echo $donnees['nom']; ?><br />
    <strong>type</strong> : <?php echo $donnees['type']; ?><br />
    <strong>desc</strong> : <?php echo $donnees['description']; ?><br />
    <strong>attr</strong> : <?php echo $donnees['attaque_rapide']; ?><br />
    <strong>atts</strong> : <?php echo $donnees['attaque-special']; ?><br />
    <strong>faib</strong> : <?php echo $donnees['faiblesse']; ?><br />
    <strong>res</strong> : <?php echo $donnees['resistance']; ?><br />
    <strong>imu</strong> : <?php echo $donnees['immunite']; ?><br />
    <strong>img</strong> : <img src="<?php echo $donnees['link_img']; ?>"/><br />
    <strong>card</strong> : <?php echo $donnees['link_card']; ?><br />
<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>