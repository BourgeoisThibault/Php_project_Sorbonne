<?php
include("view_header.php");

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=pokedek;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    header('Location: error.php?motif=Problème connexion BDD');
}

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM pokemon');

?>

            <section style="margin-top:15px">
                <content style="text-align:center;">
                    <h1 style="text-align:center; font-size:30px"><strong>Liste des Pokemons</strong></h1>
                    <h5 style="text-align:center;">(Cliquez sur la carte pour accéder aux détails)</h5>
						
					<table>
						<tr>
							<th>ID</th>
							<th>Nom</th>
							<th>Carte</th>
						</tr>
						<?php
						// On affiche chaque entrée une à une
						while ($donnees = $reponse->fetch())
						{
						?>
						<tr>
							<td><?php echo $donnees['id'];?></td>
							<td><?php echo $donnees['nom'];?></td>
							<td><a href="/pokedeck/pokemon?num=<?php echo $donnees['id'];?>"><img src="img/card/<?php echo $donnees['id'];?>.png" height="50px" width="auto"/></a></td>
						</tr>
						<?php
						}
						$reponse->closeCursor(); // Termine le traitement de la requête
						?>
					</table>
					
					</br>
					
                </content>
				
				<?php include("view_user_space.php");?>
            </section>
            
<?php

include("view_footer.php");
?>