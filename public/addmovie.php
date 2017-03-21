<?php

// access to config file
require dirname(dirname(__FILE__)).'/inc/config.php';


// Formulaire soumis
if (!empty($_POST)) {
	//print_r($_POST);exit;
	// Je récupère les données en GET
	$movieTitle = filterStringInputPost('mov_title');
	$movieReleaseYear = filterIntInputPost('mov_year');
	$categoryId = filterIntInputPost('cat_id');
	$casting = filterStringInputPost('mov_actors');
	$synopsis = filterStringInputPost('mov_info');
	$filePath = filterStringInputPost('mov_path');
	$supportId = filterIntInputPost('sup_id');
	$moviePoster = filterStringInputPost('mov_poster');

	// Le tableau contenant toutes les valeurs erreurs
	$errorList = array();

	// Je teste toutes les erreurs
	if (empty($movieTitle)) {
		$errorList[] = 'Le titre du film est vide';
	}
	if (empty($movieReleaseYear)) {
		$errorList[] = 'La date de sortie du film est vide';
	}
	else if (strlen($movieReleaseYear) != 4) {
		$errorList[] = 'La date de sortie est incorrect';
	}
	if (empty($categoryId)) {
		$errorList[] = 'La catégorie est vide';
	}
	if (empty($casting)) {
		$errorList[] = 'Le casting (Acteurs/Actrices) est vide';
	}
	if (empty($synopsis)) {
		$errorList[] = 'Le synopsis est vide';
	}
	if (empty($filePath)) {
		$errorList[] = 'Le chemin du fichier n\'est pas renseignée';
	}
	if (empty($supportId)) {
		$errorList[] = 'Le support n\'est pas renseignée';
	}
	if (empty($moviePoster)) {
		$errorList[] = 'L\'url de l\'image n\'est pas renseignée';
	}

	// Si aucune erreur
	if (empty($errorList)) {
		// J'appelle la fonction ajoutant le FILM à la DB
		$movieId = addMovie(
			$movieTitle,
			$movieReleaseYear,
			$categoryId,
			$casting,
			$synopsis,
			$filePath,
			$supportId,
			$moviePoster
		);

		// redirection
		// Si ajout ok
		if ($movieId > 0) {
			// Je redirige sur sa page
			header('Location: moviedetail.php?id='.$movieId);
			exit;
		}
	}
}


// Pour éviter les notices dans la vue, j'initialise mon tableau de données
$movieInfos = array(
	'mov_id' => 0,
	'mov_title' => '',
	'mov_year' => '',
	'cat_id' => '',
	'cat_title' => '',
	'mov_actors' => '',
	'mov_info' => '',
	'mov_path' => '',
	'sup_id' => '',
	'sup_name' => '',
	'mov_poster' => '',
);





//=====================================
// FILE INCLUSION
//=====================================
include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/addmovie.php';
include dirname(dirname(__FILE__)).'/view/footer.php';
