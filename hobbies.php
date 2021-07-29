<!DOCTYPE> 
<html>
	<?php>
		$contenu = "\r\n".$_POST['Nom']."\r\n".$_POST['Prénom']."\r\n".$_POST['Note']."/5"."\r\n".$_POST['Commentaire']."\r\n"."-------";
		$h = fopen("txt/avis.txt", "a");
		fwrite($h, $contenu);
		fclose($h);
	?>
	<head>
		<meta name="viewport" content="width=650, user-scalable=no">
		<meta charset="utf-8" />
		<script src="jquery-3.2.1.min.js"></script>
		<script src="script.js"></script>
		<script src="jcookie-min.js"></script>
		<link rel="shortcut icon" type="image/x-icon" href="min/logo.ico" />
		<?php include("style_select.php"); ?>
		<title>Hobbies</title>
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
				<div id="bloc_entete">Musique</div>
				<div id="text">
					Ecole : <b>Diapason</b><br><br>
					Batterie : <b>9 ans de pratique</b><br><br>
					Piano : <b>3 ans de pratique</b><br><br>
					Guitare Electrique : <b>2 ans de pratique</b><br><br>
					Batterie : <b>9 ans de pratique</b><br><br>
					Materiel : <br><br>
					<div class="image border bnw"><img src="min/yamaha_p115.png" alt="yamaha_p115" width="150" height="150"></div>
					<div class="image border bnw"><img src="min/ibanez_rg270.jpg" alt="ibanez_rg270" width="150" height="150"></div>
				</div>
			</div>
			<div id="bloc">
				<div id="bloc_entete">Karaté</div>
				<div id="text">
					Club : <b>CSLG de Picardie</b><br><br>
					Années de pratique : <b>14 ans</b><br><br>
					Ceinture : <b>Noir</b><br><br>
					Objectif : <b>3ème DAN</b><br><br>
					Plus haut championnat : <b>France</b><br><br><br>
					<div class="image border bnw"><img src="min/karate.jpg" alt="yamaha_p115" width="150" height="150"></div>
					<div class="image border bnw"><img src="min/mitaines.jpg" alt="ibanez_rg270" width="150" height="150"></div>
				</div>
			</div>
			<div id="bloc">
				<div id="bloc_entete">Magie</div>
				<div id="text">
					Ecole : <b>En autodidacte</b><br><br>
					Années de pratique : <b>5 ans</b><br><br>
					Displines : <b>Cartomagie et « mentalisme »</b><br><br>
					Représentations : <b>Événements privés</b><br><br>
					Carte : <b>Bicycle</b><br><br><br>
					<div class="image border bnw"><img src="min/magie.jpg" alt="yamaha_p115" width="150" height="150"></div>
					<div class="image border bnw"><img src="min/eventail.jpg" alt="ibanez_rg270" width="150" height="150"></div>
				</div>
			</div>
			<div id="bloc">
				<div id="bloc_entete">Urbex</div>
				<div id="text">
					Pratique : <b>En groupe</b><br><br>
					Années de pratique : <b>1 ans </b><br><br>
					Signification : <b>Exploration Urbaine</b><br><br>
					Zone d'exploration: <b>Amiens et Arras</b><br><br>
					Nombre de lieu exploré : <b>5</b><br><br><br>
					<div class="image border bnw"><img src="min/urbex1.jpg" alt="yamaha_p115" width="150" height="150"></div>
					<div class="image border bnw"><img src="min/urbex2.jpg" alt="ibanez_rg270" width="150" height="150"></div>
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