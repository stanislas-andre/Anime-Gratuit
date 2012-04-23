<?php
require_once 'Ag/AnimesManager.class.php';
$ag = new AnimesManager();

include 'includes/searchbar.inc.php';
include 'includes/addAnime.inc.php';

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>:: Anime-Gratuit.net - Le manga gratuit et libre ::</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="images/site/logo-small.png" rel="shortcut icon" />
<script type="text/javascript" src="javascript.js"></script> 

</head>

<body>
	<div id="page">
		<div id="header">
		</div>

		<div id="menu">
			<div class="form-rechercher">
				<img src="images/site/menu-rechercher.png" alt="rechercher" />
				<form method="get" action="#">
					<input type="text" name="title" value="Rechercher..." onclick="this.value='';" />
					<input type="submit" value="Go !" />
				</form>
			</div>
			<img src="images/site/menu-animes.png" alt="animes" />
			<img src="images/site/menu-personnages.png" alt="personnages" />
			<img src="images/site/menu-contact.png" alt="contact" />
		</div>

		<div id="content">
			<?php echo stripslashes($content); ?>
			<br />
			<a title="Ajouter un anime" href="javascript:displayAnimeForm()" id="ajouterAnime">Ajouter un anime</a>
			<div id="animeForm">
				<form method="post" action="#" enctype="multipart/form-data">
					<input type="text" name="title" value="Titre de l'anime" onclick="this.value =''" size="100" /><br /><br />
					<input type="text" name="year" value="Ann&eacute;e de l'anime" onclick="this.value =''" size="100" /><br /><br />
					<input type="text" name="author" value="Auteur de l'anime" onclick="this.value =''" size="100" /><br /><br />
					<textarea name="synopsis" onclick="this.value=''" cols="70" rows="5">Synopsis...</textarea><br /><br />
					<input type="file" name="avatar" size="70" /><br /><br />
					<input type="text" name="type" value="Genre" onclick="this.value=''" size="100" /><br /><br />
					<input type="submit" value="Ajouter" /> <input type="button" onclick="hideAnimeForm()" value="Annuler" />
				</form>
			</div>
		</div>

		<div id="footer">
			<p><a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
			<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss-blue" alt="CSS Valide !" /></a></p>
		</div>

	</div>
</body>
</html>