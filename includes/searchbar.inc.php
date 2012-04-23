<?php
if (!empty($_GET['title'])) {
	if ($ag->getAnAnimeByTitle($_GET['title']) != null) {
		$content = $ag->renderAnime($ag->getAnAnimeByTitle($_GET['title']));
	} else {
		$content = 'Votre recherche ne comporte aucun r&eacute;sultat.';
	}
} else {
	$content = $ag->renderAnimes();
}