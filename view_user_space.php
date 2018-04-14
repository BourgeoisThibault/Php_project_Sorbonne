<?php

if(!isset($_SESSION['connected'])) {
?>

<aside>
	<form method="post" action="method_connecting_customer.php">
		<fieldset>
			<legend>Vos identifiants</legend>
			<br/>
			<label>Pseudo de dresseur:</label>
			<br/>
			<input type="text" name="pseudo" placeholder="Ex : NCNA" />
			<br/>
			<br/>
			<label>Mot de passe:</label>
			<br/>
			<input type="password" name="password" />
			<br/>
			<br/>
			<input type="submit" value="Connexion" />
			<br/>
			<br/>
			<a href="#"> Mot de passe perdu? </a>
			</br>
			<a href="/pokedeck/form_sign.php"> Inscription </a>
			<br/>
			<br/>
		</fieldset>
	</form>
</aside>
<?php
}else {
?>
<aside>

	<fieldset style="text-align:center">
		<legend>Utilisateur</legend>
		<br/>
		<label><u>Nom</u></label>
		<br/>
		<p><strong><?php echo $_SESSION['nom'] ;?></strong></p>
		<br/>
		<label><u>Prenom</u></label>
		<br/>
		<p><strong><?php echo $_SESSION['prenom'] ;?></strong></p>
		<br/>
		<label><u>Mail</u></label>
		<br/>
		<p><strong><?php echo $_SESSION['mail'] ;?></strong></p>
		<br/>
		<label><u>Pseudo</u></label>
		<br/>
		<p style="font-size:25px"><strong><?php echo $_SESSION['pseudo'] ;?></strong></p>
		<br/>
		<label><u>Panier</u></label>
		<br/>
		<p><strong><?php echo count($_SESSION['panier'])." Pokemon" ;?></strong></p>
		<br/>
		<a href="/pokedeck/delete_session.php">Deconnexion</a>
		<br/>
		<br/>
	</fieldset>
	
</aside>
<?php
}
?>