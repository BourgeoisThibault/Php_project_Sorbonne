<?php

if(!isset($_GET['num'])) {
    header('Location: error.php?motif=Aucun ID trouvé');
	exit();
}

include("view_header.php");

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=pokedek;charset=utf8', 'root', '');
}
catch (Exception $e)
{
    header('Location: error.php?motif=Problème connexion BDD');
	exit();
}

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM pokemon WHERE id = ' . $_GET['num']);

// On affiche chaque entrée une à une
$donnees = $reponse->fetch();

if(empty($donnees)){
    header('Location: error.php?motif=Aucun POKEMON avec un id '.$_GET["num"].' trouvé');
	exit();
}

?>

            <section style="margin-top:15px">
                <content>
                    <h1 style="text-align:center; font-size:30px">
					<a href="/pokedeck/pokemon?num=<?php echo $_GET['num']-1;?>">
					<img src="img/web/previous.png" height="30px" width="auto"/>
					</a>
					<strong> <?php echo $donnees['nom'] ;?> </strong>
					<a href="/pokedeck/pokemon?num=<?php echo $_GET['num']+1;?>">
					<img src="img/web/next.png" height="30px" width="auto"/>
					</a>
					</h1>
					
					<div id="Global" style="text-align:center">
						<div id="gauche">
							<img src="<?php echo $donnees['link_img'];?>" height="200px" width="auto" style="border-style: solid; float:right;"/>
						</div>
						<div id="droite">
							<img src="<?php echo $donnees['link_card'];?>" height="200px" width="auto" style="border-style: solid; float:left;"/>
						</div>
					</div>
						
					<div style="text-align:center">
						<H2>Type</H2>
						<?php 
							$list = explode(", ", $donnees['type']);
							foreach ( $list as $item ) {
								echo "<p>".$item."</p>";
							}
						?>
					</div>
						
					<div style="text-align:center">
						<H2>Description</H2>
						<p><?php echo $donnees['description'];?></p>
					</div>
					
					<div style="text-align:center">
						<H2>Attaques rapides</H2>
						<?php 
							$list = explode(", ", $donnees['attaque_rapide']);
							foreach ( $list as $item ) {
								echo "<p>".$item."</p>";
							}
						?>
					</div>
					
					<div style="text-align:center">
						<H2>Attaques spéciales</H2>
						<?php 
							$list = explode(", ", $donnees['attaque_special']);
							foreach ( $list as $item ) {
								echo "<p>".$item."</p>";
							}
						?>
					</div>
					
					<div style="text-align:center">
						<H2>Faiblesses</H2>
						<?php 
							$list = explode(", ", $donnees['faiblesse']);
							foreach ( $list as $item ) {
								echo "<p>".$item."</p>";
							}
						?>
					</div>
					
					<div style="text-align:center">
						<H2>Résistances</H2>
						<?php 
							$list = explode(", ", $donnees['resistance']);
							foreach ( $list as $item ) {
								echo "<p>".$item."</p>";
							}
						?>
					</div>
					
					
					<h1 style="text-align:center">
					<a href="/pokedeck/add?num=<?php echo $_GET['num'];?>">
					<img src="img/web/add.png" height="75px" width="auto"/>
					</a>
					</h1>
					
                </content>
				
				<?php include("view_user_space.php");?>
            </section>
            
<?php
$reponse->closeCursor(); // Termine le traitement de la requête

include("view_footer.php");
?>