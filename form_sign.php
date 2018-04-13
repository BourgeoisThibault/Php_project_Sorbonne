<?php
include("view_header.php");
?>

<section style="margin-top:15px">
	<content style="text-align:center;">
		<h1 style="text-align:center; font-size:30px"><strong>Inscription</strong></h1>

		<form method="post" action="method_adding_customer.php">
          
          <label>Nom:</label>
              <br/>
            <input type="text" name="nom" placeholder="Ex: JUBOTIN" />
              <br/>
              <br/>
          <label>Prénom:</label>
              <br/>
            <input type="text" name="prenom" placeholder="Ex: Nathan" />
              <br/>
              <br/>
          <label>Adresse e-mail:</label>
              <br/>
            <input type="text" name="mail" placeholder="Ex: nathan.jubotin@pokemon.com" />
              <br/>
              <br/>
          <label>Nom d'utilisateur:</label>
              <br/>
            <input type="text" name="pseudo" placeholder="Ex: NCNA" />
              <br/>
              <br/>
          <label>Mot de passe:</label>
              <br/>
            <input type="text" name="password" />
              <br/>
              <br/>
          <label>Date de naissance:</label>
              <br/>
            <input type="text" name="naissance" />
              <br/>
              <br/>
            <input type="submit" value="Valider" />
              <br/>
              <br/>
		</form>
		
	</content>
</section>

<?php
include("view_footer.php");
?>