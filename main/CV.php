<!DOCTYPE html>
<html>
<head>
	<?php include_once("../include/head.php"); ?>
	<title>Accraugaming.fr</title>
</head>

<body>
<?php
	include_once("../include/header.php");
?>
	<main class="centrale_haut2">
<?php
if (isset($menuJavaScript))
{
	if ($menuJavaScript == TRUE)
	{
		include_once("../include/menuVieCvJs.php");
	}
}
else
{
	echo
	('
	<input type="radio" name="onglets" class="check displayNone" id="onglet-1">
	<input type="radio" name="onglets" class="check displayNone" id="onglet-2">
	<input type="radio" name="onglets" class="check displayNone" id="sousOnglet-2">
	<input type="radio" name="onglets" class="check displayNone" id="sousOnglet-3">
	<input type="radio" name="onglets" class="check displayNone" id="sousOnglet-5">
	<input type="radio" name="onglets" class="check displayNone" id="sousOnglet-6">
	<div class="flex" id="menuViePrincipale">
		<label class="cursor" for="onglet-1" id="menuVieProfessionelle">Vie Professionelle</label>
		<label class="cursor" for="onglet-2" id="menuViePersonnelle">Vie Personnelle</label>
	</div>
	<div id="hiddenMenuVie2">
		<label class="cursor" for="onglet-1" id="sousMenuVie1">Développeur Web</label>
		<label class="cursor" for="sousOnglet-2" id="sousMenuVie2">Mes Petits Boulots</label>
		<label class="cursor" for="sousOnglet-3" id="sousMenuVie3">Mes Loisirs</label>
	</div>
	<div id="hiddenMenuVie1">
		<label class="cursor" for="onglet-2" id="sousMenuVie4">diefhhfhdhfu</label>
		<label class="cursor" for="sousOnglet-5" id="sousMenuVie5">Mesfhiots</label>
		<label class="cursor" for="sousOnglet-6" id="sousMenuVie6">Mes Loisfhedhfhfirs</label>
	</div>
	');
}
?>

		<div class="experience" id="sousMenuVieBlock1">
			<h2 class="h2">Développeur web et mobile, SIMPLON {</h2>
			<p class="indentation">Develo'Pont à Pont-en-Royans ( [2017] => ("Mai-Décembre(7 mois)") )</p>
			<p class="indentation">INFO</p>
			<ul>
				<li class="indentation2 flex">Dans cette formation j'ai appris à rechercher sur internet pour résoudre mes problèmes ou pour découvrire de nouvelles choses.</li>
				<li class="indentation2 flex">On ma aidé à maitrisé les bases suivantes : PHP, JavaScript, MySQL, HTML5, CSS3.</li>
				<li class="indentation2 flex">Je suis capable de travailler en équipe dans une petite piéce(nous étions 19 dans un 30m²). Je maitrise le responsive.</li>
				<li class="indentation2 flex">Je sais utiliser GIT pour un projet en commun.</li>
			</ul>
			<p class="indentation">Les compétences acquises</p>
			<ul>
				<li class="indentation2 flex"><span class="liAlignementMenuVieAvant">["CODE"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à indenter mon code de façon propre, et ordonner, surtout pour le CSS"),</span></li>
				<li class="indentation2 flex"><span class="liAlignementMenuVieAvant">["GIT"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à utiliser git pour travailler en équipe sur un mêmes projet"),</span></li>
				<li class="indentation2 flex"><span class="liAlignementMenuVieAvant">["PHP"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à bien maitriser la logique du PHP, faire des filtres, des changements dans une page, etc..."),</span></li>
				<li class="indentation2 flex"><span class="liAlignementMenuVieAvant">["BaseDeDonnées"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à échanger des données avec une BDD, à les modifier et en toute sécurité"),</span></li>
				<li class="indentation2 flex"><span class="liAlignementMenuVieAvant">["JavaScript"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à faire des menus, des petites animations"),</span></li>
				<li class="indentation2 flex"><span class="liAlignementMenuVieAvant">["HTML5"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à bien placer les balises, et les connaitre"),</span></li>
				<li class="indentation2 flex"><span class="liAlignementMenuVieAvant">["CSS3"]</span>=> <span class="liAlignementMenuVieApres">("J'ai appris à faire des menus FULL CSS, utiliser les selecteurs")</span></li>
			</ul>
			<p class="indentation">Mes projets en commun</p>
			<ul>
				<li class="indentation2 flex"><span class="liAlignementMenuVieAvant">["Developont.fr"]</span>=> <span class="liAlignementMenuVieApres">("<a href="http://developont.fr/accueil/accueil.php">http://developont.fr/accueil/accueil.php</a><a class="marginLeftIconeLien lienPersonalise" href="http://developont.fr/accueil/accueil.php" target="_blank"><i class="fa fa-external-link" aria-hidden="true"></i></a>"),</span></li>
			</ul>
			<p class="h2">}</p>
		</div>
		<div class="experience displayNone" id="sousMenuVieBlock2">
			<h2 class="h2">Mes Petits Boulots</h2>
			<p class="h2">}</p>
		</div>
		<div class="experience displayNone" id="sousMenuVieBlock3">
			<h2 class="h2">Mes Loisirs</h2>
			<p class="h2">}</p>
		</div>
		<div class="experience displayNone" id="sousMenuVieBlock4">
			<h2 class="h2">diefhhfhdhfu</h2>
			<p class="h2">}</p>
		</div>
		<div class="experience displayNone" id="sousMenuVieBlock5">
			<h2 class="h2">Mesfhiots</h2>
			<p class="h2">}</p>
		</div>
		<div class="experience displayNone" id="sousMenuVieBlock6">
			<h2 class="h2">Mes Loisfhedhfhfirs</h2>
			<p class="h2">}</p>
		</div>
	</main>
<?php
if (isset($menuJavaScript))
{
	if ($menuJavaScript == TRUE)
	{
		echo('<script src="../javaScript/menuVieCv.js"></script>');
	}
}
if (isset($deplaceElement))
{
	if ($deplaceElement == TRUE)
	{
		echo('<script src="../javaScript/deplaceElement.js"></script>');
	}
}
?>
</body>
</html>
