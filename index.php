test
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

<script type="text/javascript">
	function displayAnimeForm() {
		document.getElementById('animeForm').style.display ='block';
		document.getElementById('ajouterAnime').style.display ='none';
	}

	function hideAnimeForm() {
		document.getElementById('animeForm').style.display = 'none';
		document.getElementById('ajouterAnime').style.display = 'block';
	}
</script>

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
					<input type="submit" value="Ajouter" /> <input type="submit" onclick="hideAnimeForm()" value="Annuler" />
				</form>
			</div>
		</div>

		<div id="footer">
		</div>

	</div>
</body>
</html>