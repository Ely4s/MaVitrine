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
		<title>Accueil</title>
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
				<div id="bloc_entete" onclick="location.href='index.php'"class="trans">Accueil</div>
				<div id="text" onclick="location.href='index.php'" class="trans">
					<b>Bienvenu(e) sur mon site !</b><br><br>
					Qui suis-je ?<br><br>
					Je suis El-idrissi Elyas, et pour le reste, je vous laisse le loisir de le découvir au travers de ce site fait à cette occasion.<br><br>
					En effet, sur ce site vous pourrez en savoir plus sur moi-même, mes hobbies, ma ville, et mes actualités.<br><br>
					Pour cela vous disposez des racourcis présents dans cette page, equivalent au menu de gauche, ainsi que le menu de droite etant, lui, uniquement reservé à mes actualités.<br><hr>
					Ce site à été réalisé dans le cadre d'un projet de Licence 1 d'informatique à l'UPJV
				</div>
			</div>
			<div id="bloc"> 
				<div id="bloc_entete" onclick="location.href='profil.php'" class="trans">Profil</div>
			 	<div class ="image bnw border" onclick="location.href='profil.php'">
					<img src="img/photo_profile.jpg" alt="Photo de Profil" class="trans" width="458" height="458" class="map" usemap="#Map" hidefocus="true">
					<map name="Map" id="Map">
						<area alt="" href="mechant.php" shape="poly" coords="137,214,131,211,134,208,140,208,146,211,149,213,152,215,151,217,147,217,146,215,143,213,140,213" />
					</map>
				</div>	
			</div>
			<div id="bloc"> 
				<div id="bloc_entete" onclick="location.href='hobbies.php'" class="trans">Hobbies</div>
<!--				Diaporama d'images-->
				<div class="slideshow trans">
					<ul class="image bnw" onclick="location.href='hobbies.php'">
						<li><img src="img/batterie.jpg" alt="" width="458" height="458" class="bigger"/></li>
						<li><img src="img/piano.jpg" alt="" width="458" height="458" class="bigger"/></li>
						<li><img src="img/guitare.jpg" alt="" width="458" height="458" class="bigger"/></li>
						<li><img src="img/karate.jpg" alt="" width="458" height="458" class="bigger"/></li>
						<li><img src="img/magie.jpg" alt="" width="458" height="458" class="bigger"/></li>
						<li><img src="img/urbex.jpg" alt="" width="458" height="458" class="bigger"/></li>
					</ul>
				</div>
			</div>
			<div id="bloc">
				<div id="bloc_entete" onclick="location.href='chez-moi.php'" class="trans">Chez-moi</div>
<!--				Diaporama d'images-->
				<div class="slideshow trans">
					<ul  class="image bnw" onclick="location.href='chez-moi.php'">
						<li><img src="img/cathedrale.jpg" alt="" width="458" height="458" class="bigger"/></li>
						<li><img src="img/hortillonnages.jpg" alt="" width="458" height="458" class="bigger"/></li>
						<li><img src="img/tourperret.jpg" alt="" width="458" height="458" class="bigger"/></li>
						<li><img src="img/saintleu.jpg" alt="" width="458" height="458" class="bigger" /></li>
						<li><img src="img/upjv.jpg" alt="" width="458" height="458" class="bigger"/></li>
						<li><img src="img/diapason.jpg" alt="" width="458" height="458" class="bigger"/></li>
					</ul>
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