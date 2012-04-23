<?php
if (!empty($_POST['title']) && !empty($_POST['year']) && !empty($_POST['author']) && !empty($_POST['synopsis']) && !empty($_POST['type']) && isset($_FILES['avatar'])) {
	$title = htmlspecialchars($_POST['title']);
	$year = htmlspecialchars($_POST['year']);
	$author = htmlspecialchars($_POST['author']);
	$synopsis = htmlspecialchars($_POST['synopsis']);
	$type = htmlspecialchars($_POST['type']);

	if ($title == "" || $title == "Titre de l'anime" || $year == "" || $year == "Année de l'anime" || $author == "" || $author == "Auteur de l'anime" || $synopsis == "" || $synopsis == "Synopsis..." || $type == "Genre" || $type == "") {
		$content = "Merci de remplir l'ensemble des champs.";
	} else {
		$dir = 'images/animes/';
		$file = basename($_FILES['avatar']['name']);
		$sizemax = 100000;
		$size = filesize($_FILES['avatar']['tmp_name']);
		$extensions = array('.png', '.gif', '.jpg', '.jpeg');
		$extension = strrchr($_FILES['avatar']['name'], '.'); 
		
		if(!in_array($extension, $extensions)) {
		     $error = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg.';
		}
		if($size > $sizemax) {
		     $erreur = 'Le fichier est trop lourd...';
		}
		if(!isset($error)) {
		     $file = strtr($file, 
		          'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ', 
		          'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
		     $file = preg_replace('/([^.a-z0-9]+)/i', '-', $file);
		     move_uploaded_file($_FILES['avatar']['tmp_name'], $dir . $file);
		}

		$ag->createAnime($title, $year, $author, $synopsis, $file, $type);
	}
}