<?php
include("header.php");

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=pokedek;charset=utf8', 'esibank', 'esibankpds');
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}


// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM pokemon WHERE id = ' . $_GET['num']);

// On affiche chaque entrée une à une
$donnees = $reponse->fetch();

?>

            <section style="margin-top:15px">
                <content>
                    <h1><?php echo $donnees['nom']."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(type: ".$donnees['type'].")";?></h1>
					
					<div id="Global">
						<div id="gauche">
							<img src="<?php echo $donnees['link_img'];?>" height="200px" width="auto"/>
						</div>
						<div id="droite">
							Description:</br>
							<?php echo $donnees['description'];?>
						</div>
					</div>
					
                </content>
				
				<?php include("user_space.php");?>
            </section>
            
<?php
$reponse->closeCursor(); // Termine le traitement de la requête

include("footer.php");
?>