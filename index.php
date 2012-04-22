<?php
require_once 'Ag/AnimesManager.class.php';
$ag = new AnimesManager();

if (!empty($_POST['title'])) {
	if ($ag->getAnAnimeByTitle($_POST['title']) != null) {
		$content = $ag->renderAnime($ag->getAnAnimeByTitle($_POST['title']));
	} else {
		$content = 'Votre recherche ne comporte aucun r&eacute;sultat.';
	}
} else {
	$content = $ag->renderAnimes();
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>:: Anime-Gratuit.net - Le manga gratuit et libre ::</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="images/site/logo-small.png" rel="shortcut icon" />
</head>

<body>
	<div id="page">
		<div id="header">
		</div>

		<div id="menu">
			<div class="form-rechercher">
				<img src="images/site/menu-rechercher.png" alt="rechercher" />
				<form method="post" action="#">
					<input type="text" name="title" value="Rechercher..." onclick="this.value='';" />
					<input type="submit" value="Go !" />
				</form>
			</div>
			<img src="images/site/menu-animes.png" alt="animes" />
			<img src="images/site/menu-personnages.png" alt="personnages" />
			<img src="images/site/menu-contact.png" alt="contact" />
		</div>

		<div id="content">
			<?php
			echo stripslashes($content);
			?>
		</div>

		<div id="footer">
		</div>

	</div>
</body>
</html>