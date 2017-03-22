<?php

// access to config file
require dirname(dirname(__FILE__)).'/inc/config.php';
?>
<pre>
	<?php
		$searchMovie = $_GET['get_omdb'];

		// HTTP request to API OMDbAPI
		$json = file_get_contents('http://www.omdbapi.com/?t='.$searchMovie);
		//echo $json.'<br>';

		// Get it as array
		$array = json_decode($json, true);
		//var_dump($array);
	?>
</pre>
<?php



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
	$id = filterIntInputPost('mov_id');

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
		/*if(!empty($movieInfos['mov_id'])){
			// J'appelle la fonction ajoutant le FILM à la DB
			$movieId = updateMovie(
				$movieTitle,
				$movieReleaseYear,
				$categoryId,
				$casting,
				$synopsis,
				$filePath,
				$supportId,
				$moviePoster
			);
		} else {*/
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
	/*}
}*/

// Je récupère toutes les catégories
$categoriesList = getAllCategories();

// Je récupère tous les supports
$supportsList = getAllSupports();

// Pour que les informations s'affichent automatiquement grâce aux infos récoltées par l'API: (les informations non-renseignées par l'api devront être introduit manuellement.)

/*if(!empty($movieInfos['mov_id'])){
	$movieInfos = array(
		'mov_id' => $movieId,
		'mov_title' => ['mov_title'],
		'mov_year' => ['mov_year'],
		'cat_id' => ['categories_cat_id'],
		'cat_title' => ['categories_cat_title'],
		'mov_actors' => ['mov_actors'],
		'mov_info' => ['mov_info'],
		'mov_path' => ['mov_path'],
		'sup_id' => ['support_sup_id'],
		'sup_name' => ['support_sup_name'],
		'mov_poster' => ['mov_poster'],
	);

} else {*/
		$movieInfos = array(
		'mov_id' => 0,
		'mov_title' => $array['Title'],
		'mov_year' => $array['Year'],
		'cat_id' => '',
		'cat_title' => '',
		'mov_actors' => $array['Actors'],
		'mov_info' => $array['Plot'],
		'mov_path' => '',
		'sup_id' => '',
		'sup_name' => '',
		'mov_poster' => $array['Poster'],
	);
/*};*/


//=====================================
// FILE INCLUSION
//=====================================
include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/addmovie.php';
include dirname(dirname(__FILE__)).'/view/footer.php';
