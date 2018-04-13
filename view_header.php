<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
	<head>
	<meta charset="utf-8">
	<link type="text/css" rel="stylesheet" href="mystyle.css"/>
	<title> Index</title>
	</head>
	
	<body>
	
	<div id="bloc_page">
            <header>
                <div id="titre_principal">
					<a href="/pokedeck" style="text-decoration:none; color:black">
                    <div id="logo">
                        <img src="pikachu.png" alt="Logo du projet" />
                        <h1>Pokedeck</h1>    
                    </div>
					</a>
                </div>
                
                <nav>
                    <ul>
                        <li><a href="/pokedeck/">Accueil</a></li>
                        <li><a href="/pokedeck/pokedex.php">Pokedex</a></li>
                        <li><a href="/pokedeck/team.php">Equipe</a></li>
                    </ul>
                </nav>
            </header>