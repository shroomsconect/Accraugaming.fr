<!DOCTYPE html>
<html>
<head>
	<?php include_once("../include/head.php"); ?>
	<title>Accraugaming.fr</title>
</head>

<body>
	<div class="infoBulle" id="infoBulleRemoveClicker">
	<div id="positionInfoBulleRemoveClicker">
		<div>
			<span>Vous pouvez rétablir la page par défaut en cliquant ci-dessus sur "Curriculum-Vitae"</span>
			<p>Ou appuyer sur F5 pour recommencer</p>
			<p><input type="button" value="J'ai compris" onclick="hiddenInfoBulleRemoveClicker()"></p>
		</div>
	</div>
	</div>

	<div class="infoBulle" id="infoBulleClicker">
	<div id="positionInfoBulleClicker">
		<div id="divInfoBulleTouche">
			<span>Bonjour cher(e) visiteur(euse), vous pouvez a présent clicker sur la plupart des éléments
				pour pouvoir les déplacer avec les flèches directionnelles.
				<p>Préféré(e)-vous choisir les touches vous-même?</p>
			</span>
			<input type="button" value="oui" onclick="choiceButtonMove()">
			<input type="button" value="non" onclick="hiddenInfoBulleClicker()">
		</div>
		<div id="getTouche" hidden>
			<span>Appuyer sur un touche pour definir le déplacement vers la
				<span style="font-weight: bold" id="getToucheDirection">GAUCHE</span>
			</span>
		</div>
	</div>
	</div>
<?php
include_once("../include/header.php");
?>
<main class="centraleHautCv">
	<input type="radio" name="onglets" class="displayNone" id="onglet1">
	<input type="radio" name="onglets" class="displayNone" id="onglet2">
	<input type="radio" name="onglets" class="displayNone" id="sousOnglet2">
	<input type="radio" name="onglets" class="displayNone" id="sousOnglet3">
	<input type="radio" name="onglets" class="displayNone" id="sousOnglet5">
	<input type="radio" name="onglets" class="displayNone" id="sousOnglet6">
	<div class="flex fontFamily" id="menuViePrincipale">
		<label class="cursor labelMenu " for="onglet1" id="menuVieProfessionelle" onmouseover="changeOverMenu(0)" onclick="getElement(this)">Vie Professionelle</label>
		<!-- <label class="cursor labelMenu" for="onglet2" id="menuViePersonnelle" onmouseover="changeOverMenu(1)">Vie Personnelle</label> -->
	</div>
	<div class="flex fontFamily" id="hiddenMenuVie2">
		<label class="cursor labelMenu widthReset" for="onglet1" id="sousMenuVie1" onclick="getElement(this)">Développeur Web</label>
		<label class="cursor labelMenu widthReset" for="sousOnglet2" id="sousMenuVie2" onclick="getElement(this)">Mes experiences professionnelles</label>
		<label class="cursor labelMenu widthReset" for="sousOnglet3" id="sousMenuVie3" onclick="getElement(this)">Mes Loisirs</label>
	</div>
	<div class="displayNone fontFamily" id="hiddenMenuVie1">
		<label class="cursor labelMenu" for="onglet2" id="sousMenuVie4">diefhhfhdhfu</label>
		<label class="cursor labelMenu" for="sousOnglet5" id="sousMenuVie5">Mesfhiots</label>
		<label class="cursor labelMenu" for="sousOnglet6" id="sousMenuVie6">Mes Loisirs</label>
	</div>
	<input type="checkbox" class="displayNone" id="formMailShow">
	<div class="experience backColorDivMenuVie colorWhite" id="sousMenuVieBlock1">
		<div>
		<div class="floatRight colorWhite monIdentite">
			<p id="deplaceElement1" class="widthReset" onclick="getElement(this)">Stéphane PACHOT, <span id="age">20</span> ans</p>
			<p id="deplaceElement2" class="widthReset" onclick="getElement(this)">Né le 1<sup>er</sup> Juillet 1997</p>
			<p id="deplaceElement3" class="widthReset" onclick="getElement(this)">07 83 07 15 11</p>
			<p id="deplaceElement4" class="widthReset" onclick="getElement(this)">Permis B</p>
			<label id="deplaceElement5" onclick="getElement(this)" for="formMailShow" class="onMouseOverMail cursor widthReset">stephane.pachot@orange.fr</label>
			<p id="deplaceElement6" class="widthReset" onclick="getElement(this)">Saint Bonnet De Chavagne, 38840</p>
			<p id="deplaceElement7" class="widthReset" onclick="getElement(this)">Passionné d'informatiques</p>
		</div>
		<h2 id="deplaceElement8" onclick="getElement(this)" class="h2 widthReset">Développeur web et mobile, SIMPLON{</h2>
		<p id="deplaceElement9" onclick="getElement(this)" class="indentation widthReset">Develo'Pont à Pont-en-Royans ( [2017] => ("Mai-Décembre(7 mois)") )</p>
		<p  id="deplaceElement10" onclick="getElement(this)"class="indentation widthReset">INFO</p>
		</div>
		<ul class="colorBlancSombre">
			<li id="deplaceElement11" onclick="getElement(this)" class="indentation2 flex widthReset">On m'a aidé à maitriser les bases suivantes :</li>
			<li id="deplaceElement12" onclick="getElement(this)" class="indentation2 styleList flex widthReset">PHP, JavaScript(jQuery), MySQL, HTML5, CSS3.</li>
			<li id="deplaceElement13" onclick="getElement(this)" class="indentation2 styleList flex widthReset">le responsive, les flex, les menus.</li>
			<li id="deplaceElement14" onclick="getElement(this)" class="indentation2 styleList flex widthReset">GIT pour les projets en commun.</li>
			<li id="deplaceElement15" onclick="getElement(this)" class="indentation2 styleList flex widthReset">rechercher sur internet pour résoudre mes problèmes ou pour découvrir de nouvelles choses.</li>
			<li id="deplaceElement16" onclick="getElement(this)" class="indentation2 styleList flex widthReset">Je suis capable de travailler en équipe dans une petite pièce (nous étions 19 dans un 45m²).</li>
		</ul>
		<p id="deplaceElement17" onclick="getElement(this)" class="indentation widthReset">Les compétences acquises</p>
		<ul class="colorBlancSombre">
			<li id="deplaceElement18" onclick="getElement(this)" class="indentation2 flex widthReset"><span class="liAlignementMenuVieAvant">["CODE"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à indenter mon code de façon propre, et ordonner, surtout pour le CSS"),</span></li>
			<li id="deplaceElement19" onclick="getElement(this)" class="indentation2 flex widthReset"><span class="liAlignementMenuVieAvant">["GIT"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à utiliser GIT pour travailler en équipes sur un même projet"),</span></li>
			<li id="deplaceElement20" onclick="getElement(this)" class="indentation2 flex widthReset"><span class="liAlignementMenuVieAvant">["PHP"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à bien maitriser la logique du PHP, faire des filtres, des changements dans une page, etc..."),</span></li>
			<li id="deplaceElement21" onclick="getElement(this)" class="indentation2 flex widthReset"><span class="liAlignementMenuVieAvant">["JavaScript"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à faire des menus, des petites animations et des requêtes AJAX"),</span></li>
			<li id="deplaceElement22" onclick="getElement(this)" class="indentation2 flex widthReset"><span class="liAlignementMenuVieAvant">["travailEnGroupes"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à m'organiser et à travailler en groupes de 2, 3 et 5"),</span></li>
			<li id="deplaceElement23" onclick="getElement(this)" class="indentation2 flex widthReset"><span class="liAlignementMenuVieAvant">["BaseDeDonnées"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à échanger des données avec une BDD, à les modifier et en toute sécurité"),</span></li>
			<li id="deplaceElement24" onclick="getElement(this)" class="indentation2 flex widthReset"><span class="liAlignementMenuVieAvant">["HTML5"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à bien placer les balises, et les connaître"),</span></li>
			<li id="deplaceElement25" onclick="getElement(this)" class="indentation2 flex widthReset"><span class="liAlignementMenuVieAvant">["CSS3"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à faire des menus FULL CSS, utiliser les sélecteurs")</span></li>
		</ul>
		<p id="deplaceElement26" onclick="getElement(this)" class="indentation widthReset">Mes projets en commun</p>
		<ul class="colorBlancSombre">
			<li id="deplaceElement27" onclick="getElement(this)" class="indentation2 flex widthReset">
				<span class="liAlignementMenuVieAvant">["Developont.fr"]</span>=>
				<span class="liAlignementMenuVieApres">("
					<a href="//developont.fr" class="lienPersonalise">developont.fr</a>
					<a class="marginLeftIconeLien lienPersonalise" href="//developont.fr" target="_blank">
						<i class="fa fa-external-link" aria-hidden="true"></i>
					</a>"),
				</span>
			</li>
			<li id="deplaceElement28" onclick="getElement(this)" class="indentation2 flex widthReset">
				<span class="liAlignementMenuVieAvant">["SearchMe"]</span>=>
				<span class="liAlignementMenuVieApres">("
					<a href="//developont.fr/~stephane/SearchMe/" class="lienPersonalise">developont.fr/~stephane/SearchMe/</a>
					<a class="marginLeftIconeLien lienPersonalise" href="//developont.fr/~stephane/SearchMe/" target="_blank">
						<i class="fa fa-external-link" aria-hidden="true"></i>
					</a>"),
				</span>
			</li>
		</ul>
		<p class="indentation widthReset" id="deplaceElement29" onclick="getElement(this)">Mes projets</p>
		<ul class="colorBlancSombre">
			<li id="deplaceElement30" onclick="getElement(this)" class="indentation2 flex widthReset">
				<span class="liAlignementMenuVieAvant">["deplacerLesElements"]</span>=>
				<span class="liAlignementMenuVieApres">("
					<a class="lienPersonalise"><label for="deplaceElement">Cliquer pour pouvoir déplacer les éléments</label></a>"),
				</span>
			</li>
		</ul>
		<form action="" method="get">
			<input type="hidden" name="deplaceElement" value="true">
			<input type="submit" id="deplaceElement" hidden>
		</form>
		<p class="h2">}</p>
	</div>
	<div class="experience backColorDivMenuVie colorWhite displayNone" id="sousMenuVieBlock2">
		<h2 class="h2">Mes Petits Boulots</h2>
		<p class="h2">}</p>
	</div>
	<div class="experience backColorDivMenuVie colorWhite displayNone" id="sousMenuVieBlock3">
		<h2 class="h2">Mes Loisirs</h2>
		<p class="h2">}</p>
	</div>
	<div class="experience backColorDivMenuVie colorWhite displayNone" id="sousMenuVieBlock4">
		<h2 class="h2">diefhhfhdhfu</h2>
		<p class="h2">}</p>
	</div>
	<div class="experience backColorDivMenuVie colorWhite displayNone" id="sousMenuVieBlock5">
		<h2 class="h2">Mesfhiots</h2>
		<p class="h2">}</p>
	</div>
	<div class="experience backColorDivMenuVie colorWhite displayNone" id="sousMenuVieBlock6">
		<h2 class="h2">Mes Loisfhedhfhfirs</h2>
		<p class="h2">}</p>
	</div>
	<div class="experience backColorDivMenuVie colorWhite displayNone" id="sendEmail">
		<form class="formEmail flex" action="" method="post">
			<div id="deplaceElement31" onclick="getElement(this)" class="flex widthReset">
				<label class="widthFormEmail">Email</label>
				<input class="inputFormEmail" type="email" name="email" placeholder="Entrez votre email" required>
			</div>
			<div id="deplaceElement32" onclick="getElement(this)" class="flex heightFormEmailSujet widthReset">
				<label class="widthFormEmail">Sujet</label>
				<input class="inputFormSujet" type="text" name="sujet" placeholder="Renseignez votre sujet" required>
			</div>
			<div id="deplaceElement33" onclick="getElement(this)" class="flex widthReset">
				<label class="widthFormEmail">Message</label>
				<textarea class="inputFormMessage" id="message" name="message" placeholder="Votre message ne peut pas dépasser 2000 caractères" maxlength="2000" onkeydown="checkMessage()" onpaste="checkMessage()" required></textarea>
			</div>
			<div class="flex">
				<span class="widthFormEmail"></span>
				<label class="alignVertical fa fa-arrow-left flex" for="formMailShow" aria-hidden="true" title="Retour"></label>
				<label class="alignVerticalAfter fa fa-envelope flex" for="submit" aria-hidden="true" title="Envoyer"></label>
				<input type="submit" value="Envoyer" id="submit" class="displayNone">
				<div id="deplaceElement34" onclick="getElement(this)" class="caractereInTextareaIndent widthReset"><span id="caractereInTextarea">0</span><label>/2000</label></div>
			</div>
		</form>
	</div>
</main>
<?php
include_once("../fonction/fonction.php");
if (isset($_POST["email"]) && isset($_POST["sujet"]) && isset($_POST["message"]))
{
	sendEmail($_POST["email"],$_POST["sujet"],$_POST["message"]);
}
if (isset($_GET["deplaceElement"]))
{
	if ($_GET["deplaceElement"])
	{
		echo('<script src="../javaScript/deplaceElement.js"></script>');
	}
}
?>
<script src="../javaScript/script.js"></script>
</body>
</html>
