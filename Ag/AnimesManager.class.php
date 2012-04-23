<?php

require_once 'Anime.class.php';
require_once 'SqlStore.class.php';

class AnimesManager {

	private $animes;		// Array of Anime
	private $sqlStore;		// SqlStore Object

	public function __construct() {
		require 'conf/config.conf.php';
		$this->sqlStore = new SqlStore($conf['server'], $conf['login'], $conf['password'], $conf['database']);
		$query = $this->sqlStore->query("SELECT * FROM anime ORDER BY title");
		while ($result = mysql_fetch_array($query)) {
			$this->animes[] = new Anime($result['id'], $result['title'], $result['year'], $result['author'], $result['synopsis'], $result['photoName'], $result['type']);
		}
	}

	/**
	* Get an anime from $animes property (tested and works)
	* @param String $id
	* @return Anime $result
	*/
	public function getAnAnime($id) {
		$result = null;

		foreach ($this->animes as $anime) {
			if ($anime->getId() == $id) {
				$result = $anime;
			}
		}

		return $result;
	}

	/**
	* Get an anime from $animes property (tested and works)
	* @param String $title
	* @return Anime $result
	*/
	public function getAnAnimeByTitle($title) {
		$result = null;

		foreach ($this->animes as $anime) {
			if (strtoupper($anime->getTitle()) == strtoupper($title)) {
				$result = $anime;
			}
		}

		return $result;
	}

	/**
	* Render the HTML article of an Anime (tested and works)
	* @param Anime $anime
	* @return String $result
	*/
	public function renderAnime($anime) {
		return '<div class="article">
					<div class="titre">' . $anime->getTitle() . '</div>
					<div class="contenu">
						<div class="image-contenu">
							<img src="images/animes/' . $anime->getPhotoName() . '" alt="' . $anime->getPhotoName() . '" width="220" height="165" />
						</div>
						<div class="info-contenu" align="justify">
							ANN&Eacute;E : ' . $anime->getYear() . '<br />
							AUTEUR : ' . $anime->getAuthor() . '<br />
							GENRE : ' . $anime->getType() . '<br />
							SYNOPSIS : ' . $anime->getSynopsis() . '
						</div>
					</div>
				</div>';
	}

		/**
	* Render the HTML articles of all animes (tested and works)
	* @return String $result
	*/
	public function renderAnimes() {
		$result = '';
		foreach ($this->animes as $anime) {
			$result .= $this->renderAnime($anime);
		}		
		return $result;
	}

	/**
	* Create and save an anime from the database (tested and works)
	* @param String $title
	* @param String $year
	* @param String $author
	* @param String $synopsis
	* @param String $photoName
	* @param String $type
	*/
	public function createAnime($title, $year, $author, $synopsis, $photoName, $type) {
		$anime = new Anime(uniqid(), $title, $year, $author, $synopsis, $photoName, $type);
		$anime->save();
	}

	public function dropAnime($anime) {
		$this->sqlStore->query("DELETE FROM anime WHERE id = '$anime->getId()'");
	}

	public function getSqlStore() {
		return $this->sqlStore;
	}

}