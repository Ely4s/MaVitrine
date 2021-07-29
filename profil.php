<!DOCTYPE> 
<html>
<!--	Ecriture du fichier contenant les informations rentrées par l'utilisateur-->
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
		<title>Profil</title>
	</head>
	<body>
<!--		Préchargement des motifs de fond et du gif-->
		<img src="bg/escheresque.png" style="display:none" alt="">
		<img src="bg/hypnotize.png" style="display:none" alt="">
		<img src="bg/swirl_pattern.png" style="display:none" alt="">
		<img src="min/nyancat.gif" style="display:none" alt="">
<!--		Injection de l'entête-->
		<?php include("entete.php"); ?>
<!--		Début de la page-->
		<div id="page">
<!--			Ensemble des "bloc"s constituants la "page"-->
			<div id="bloc"> 
				<div id="bloc_entete" class="red">Photo de Profil</div>
			 	<div class="image bnw border"><img src="img/photo_profile.jpg" alt="" width="458" height="458" class="map" usemap="#Map" hidefocus="true"></div>
				<map name="Map" id="Map">
					<area alt="" href="mechant.php" shape="poly" coords="137,214,131,211,134,208,140,208,146,211,149,213,152,215,151,217,147,217,146,215,143,213,140,213" />
				</map>
			</div>
			<div id="bloc">
				<div id="bloc_entete">Qui suis-je ?</div>
				<div id="text">
					Nom et prénom : <b>El-idrissi Elyas</b><br><br>
					Âge : <b>18 ans</b><br><br>
					Ville: <b>Amiens</b><br><br>
					FAC: <b>UPJV pôle Scientifique</b><br><br>
					Filière : <b>Licence 1 mention Informatique</b><br><br>
					Ambition : <b>Ingénieur en Informatique</b><br><br>
					Hobbies : <b>Karaté, Musique, Urbex</b><br><br><hr><br>
					<div id="social" onclick="window.open('https://www.facebook.com/elyas.drss')" class="image border trans"><img src="min/facebook.jpg" alt="" width="80" height="80" /></div>
					<div id="social" onclick="window.open('https://www.instagram.com/elyas_drss/')" class="image border trans"><img src="min/instagram.jpg" alt="" width="80" height="80" /></div>
				</div>
			</div>
			<div id="bloc">
				<div id="bloc_entete">Compétences</div>
				<div id="text">
					HTML : <div id="barre"><div id="niveau" style="width:80%"></div></div>
					<br>
					CSS : <div id="barre"><div id="niveau" style="width:60%"></div></div>
					<br>
					JS : <div id="barre"><div id="niveau" style="width:20%"></div></div>
					<br>
					PHP: <div id="barre"><div id="niveau" style="width:10%"></div></div>
					<br>
					Python : <div id="barre"><div id="niveau" style="width:90%"></div></div>
				</div>
			</div>
			<div id="bloc">
				<div id="bloc_entete">Contact</div>
<!--				Formulaire de contact-->
				<form method="post" action="merci.php">
					<input type="text" name="Nom" id="Nom" placeholder="Nom" size="30" required pattern="[a-zA-Z]+"/>
					<input type="text" name="Prénom" id="Prénom" placeholder="Prénom" size="30" maxlength="10" required pattern="[a-zA-Z]+"/>
					<input type="email" name="Mail" id="Mail" placeholder="Mail" minlength="5" size="30" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="ENTREZ"/>
					<select name="Note" id="Note" required>
						<option value="" selected>Note :</option>
						<option value="0">0/5</option>
						<option value="1">1/5</option>
						<option value="2">2/5</option>
						<option value="3">3/5</option>
						<option value="4">4/5</option>
						<option value="5">5/5</option>
					</select>
					<textarea name="Commentaire" id="Commentaire" rows="10" cols="50" placeholder="Que pensez-vous de mon site ? Avez-vous des suggestions ?" required></textarea>   
					<input type="submit" value="Valider" id="valider" />
				</form>
			</div>
			
<!--			Injection du "pied" de page-->
			<div id="pied">
				<?php include("pied.php"); ?>
				<div id="nyancat" class="transition"><img src="min/nyancat.png" onmouseout="this.src='min/nyancat.png';" onmouseover="this.src='min/nyancat.gif';" alt=""/></div>
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
