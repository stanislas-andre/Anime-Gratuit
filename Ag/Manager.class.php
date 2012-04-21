<?php
class Manager {

	private $animes;		// List of Anime
	private $sqlStore;		// SqlStore Object

	public function __construct() {

	}

	public function getAnAnime($id) {
		$i = 0;
		$result = null;
		while ($id != $animes[$i]->getId() && $i < count($animes)) {
			if ($id != $animes[$i]->getId()) {
				$result = $animes[$i];
			}
		}
		return $result;
	}

	public function renderAnime($anime) {
		return '<div class="article">
				<div class="titre">' . $anime->getTitle() . '</div>
				<div class="contenu">
					<div class="image-contenu">
						<img src="images/animes/' . $anime->getPhotoName . '" alt="' . $anime->getTitle() . '" />
					</div>
					<div class="info-contenu">
						' . $anime->getYear() . '<br />' 
						. $anime->getAuthor() . '<br />'
						. $anime->getType() . '<br />'
						. $anime->getSynopsis() . '
					</div>
				</div>
			</div>';
	}

	public function createAnime($title, $year, $author, $synopsis, $photoUrl) {
		$anime = new Anime($title, $year, $author, $synopsis, $photoUrl);
		$anime->save();
	}

}