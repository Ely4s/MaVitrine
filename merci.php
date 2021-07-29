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
		<title>Merci !</title>
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
			<div id="bloc" style="height:618px"> 
				<div id="bloc_entete">Merci</div>
				<div id="text">
					<br><br>
					Vos avis et vos conseils me sont précieux,<br>
					ils me permettent d'améliorer mon site du mieux possible ..
					Merci d'y avoir contribué !<br><br><br><br>
					<img src="img/mail.png" class="bnw border" alt="">
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