<?php include 'includes/header.inc.php'; 
require_once 'Ag/AnimesManager.class.php';

$ag = new AnimesManager();

include 'includes/searchbar.inc.php';
include 'includes/addAnime.inc.php';

?>

		<div id="content">
			<?php 
			// $content is declared in includes/searchbar.inc.php
			echo stripslashes($content); 
			?>
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

<?php include 'includes/footer.inc.php'; ?>