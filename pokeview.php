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
$reponse = $bdd->query('SELECT * FROM pokemon WHERE id = ' . $_GET['pokemonid']);

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{

?>


<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="IndexCSS.css"/>
    <title> Index</title>
  </head>
  <body>
  <table id="tableau2">
      <tr>
        <th id="Accueil">
          <ul id="menu">
            <li><a href="Accueil.php">Accueil</a></li>
          </ul>
        </th>
        <th id="Album">
          <ul id="menu">
            <li><a href="Album.php">Album</a></li>
          </ul>
        </th>
        <th id="Forum">
          <ul id="menu">
            <li><a href="Forum.php">Forum</a></li>
          </ul>
        </th>
        <th id="Nouscontacter">
          <ul id="menu">
            <li><a href="Nouscontacter.php">Nous contacter</a></li>
          </ul>
        </th>
        <th id="FAQ">
          <ul id="menu">
            <li><a href="FAQ.php">FAQ</a></li>
          </ul>
        </th>
      </tr>
    </table>
    <form method="post" action="traitement.php">
          <p>
            <fieldset>
              <legend>Vos identifiants</legend>
                <br/>
            <label>Pseudo de dresseur:</label>
                <br/>
              <input type="text" name="pseudo" placeholder="Ex : Pikachu" />
                <br/>
            <label>Mot de passe:</label>
                <br/>
              <input type="text" name="mot de passe" />
                <br/>
                <br/>
              <input type="submit" value="Connexion" />
                <br/>
                <br/>
                  <a href="#"> Mot de passe perdu? </a>
                <br/>
                <br/>
            </fieldset>
      </p>
      </form>
<table id="tableau1">
  <tr>
    <th id="photo">
      <img id="<?php echo $donnees['id']; ?>" src="<?php echo $donnees['link_img']; ?>"/>
</th>
  <th id="N"><?php echo $donnees['nom']; ?>
  </tr>
  <tr>
    <th id="Desc">DESCRIPTION
    </br>
    </br>
      <?php echo $donnees['description']; ?>
    </th>
    <th id="Type">Type :
    </br>
    </br>
      <?php echo $donnees['type']; ?>
    </th>
  </tr>
  <tr>
    <th id="attaqueR001">ATTAQUES RAPIDES
    </br>
    </br>
    <?php echo $donnees['attaque_rapide']; ?>
    </th>
    <th id="faiblesses001">FAIBLESSES
    </br>
    </br>
    <?php echo $donnees['faiblesse']; ?>
    </th>
  </tr>
  <tr>
    <th id="attaqueS001">ATTAQUES SPECIALES
    </br>
    </br>
    <?php echo $donnees['attaque-special']; ?>
    </th>
    <th id="faiblesses001">RESISTANCE
    </br>
    </br>
    <?php echo $donnees['resistance']; ?>
    </th>
  </tr>
</table>

id = <?php echo $_GET['pokemonid']; ?>

  </body>
</html>

<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>
