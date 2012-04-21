<?php

require_once 'Anime.class.php';
require_once 'SqlStore.class.php';
require_once 'conf/config.conf.php';

class AnimesManager {

	private $animes;		// Array of Anime
	private $sqlStore;		// SqlStore Object

	public function __construct() {

	}

	/**
	* Get an anime from $animes property
	* @param String $id
	* @return Anime $result
	*/
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

	/**
	* Render the HTML article of an Anime
	* @param Anime $anime
	* @return String $result
	*/
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

	/**
	* Create and save an anime from the database
	* @param String $title
	* @param String $year
	* @param String $author
	* @param String $synopsis
	* @param String $photoUrl
	* @param String $type
	*/
	public function createAnime($title, $year, $author, $synopsis, $photoUrl, $type) {
		$anime = new Anime($title, $year, $author, $synopsis, $photoUrl, $type);
		$anime->save();
	}

}