<!DOCTYPE> 
<html>
	<head>
		<meta name="viewport" content="width=650, user-scalable=no">
		<meta charset="utf-8" />
		<script src="jquery-3.2.1.min.js"></script>
		<script src="script.js"></script>
		<script src="jcookie-min.js"></script>
		<link rel="shortcut icon" type="image/x-icon" href="min/logo.ico" />
		<?php include("style_select.php"); ?>
		<title>Chez-moi</title>
	</head>
	<body>
<!--		Préchargement des motifs de fond-->
		<img src="bg/escheresque.png" style="display:none" alt="">
		<img src="bg/hypnotize.png" style="display:none" alt="">
		<img src="bg/swirl_pattern.png" style="display:none" alt="">
<!--		Injection de l'entête-->
		<?php include("entete.php"); ?>
<!--		Début de la page-->
		<div id="page">
<!--			Ensemble des "bloc"s constituants la "page"-->
			<div id="bloc"> 
				<div id="bloc_entete">Cathédrale d'Amiens</div>
			 	<div class ="image bnw border">
					<img src="img/cathedrale.jpg" alt="Photo de Profil"width="458" height="458">
				</div>	
			</div>
			<div id="bloc"> 
				<div id="bloc_entete">Les Hortillonnages</div>
			 	<div class ="image bnw border">
					<img src="img/hortillonnages.jpg" alt="Photo de Profil"width="458" height="458">
				</div>	
			</div>
			<div id="bloc"> 
				<div id="bloc_entete">La Tour Perret</div>
			 	<div class ="image bnw border">
					<img src="img/tourperret.jpg" alt="Photo de Profil"width="458" height="458">
				</div>	
			</div>
			<div id="bloc"> 
				<div id="bloc_entete">Saint Leu</div>
			 	<div class ="image bnw border">
					<img src="img/saintleu.jpg" alt="Photo de Profil"width="458" height="458">
				</div>	
			</div>
			<div id="bloc"> 
				<div id="bloc_entete">UPJV Pôle Science</div>
			 	<div class ="image bnw border">
					<img src="img/upjv.jpg" alt="Photo de Profil"width="458" height="458">
				</div>	
			</div>
			<div id="bloc"> 
				<div id="bloc_entete">Diapason</div>
			 	<div class ="image bnw border">
					<img src="img/diapason.jpg" alt="Photo de Profil"width="458" height="458">
				</div>
			</div>
<!--			Injection du "pied" de page-->
			<div id="pied">
				<?php include("pied.php"); ?>
			</div>
		</div>
<!--		Injection du menu-->
		<?php include("menu.php"); ?>
<!--		Injection du menu d'actualité-->
		<?php include("actualite.php"); ?>
<!--		Securité sur la taille de la fenêtre-->
		<div id="add"> <div>Veuillez agrandir la taille de votre fênetre</div></div>
	</body>
</html>