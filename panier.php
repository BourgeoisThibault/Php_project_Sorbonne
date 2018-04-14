<?php
include("view_header.php");


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
	exit()
;}

?>

            <section style="margin-top:15px">
                <content style="text-align:center;">
                    <h1 style="text-align:center; font-size:30px"><strong>Mon panier</strong></h1>
						
					<table>
						<tr>
							<th>Nom</th>
							<th>Carte</th>
						</tr>
						<?php
						for($i = 0; $i < count($_SESSION['panier']); $i++)
							  {

						// On récupère tout le contenu de la table jeux_video
						$reponse = $bdd->query('SELECT * FROM pokemon WHERE id='.$_SESSION['panier'][$i]);
						$donnees = $reponse->fetch();
						?>
						<tr>
							<td><?php echo $donnees['nom'];?></td>
							<td><img src="img/card/<?php echo $donnees['id'];?>.png" height="75px" width="auto"/></td>
						</tr>
						<?php
												$reponse->closeCursor(); // Termine le traitement de la requête
						}
						?>
					</table>
					
					</br>
					
                </content>
				
				<?php include("view_user_space.php");?>
            </section>
            
<?php

include("view_footer.php");
?>