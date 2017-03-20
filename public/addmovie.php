<?php

// access to config file
require dirname(dirname(__FILE__)).'/inc/config.php';
/* NAOMI: À CONTINUER/VERIFIER DEMAIN
// Formulaire soumis
if (!empty($_POST)) {
	//print_r($_POST);exit;
	// Je récupère les données en GET
	$lastname = filterStringInputPost('stu_lastname');
	$firstname = filterStringInputPost('stu_firstname');
	$email = filterStringInputPost('stu_email');
	$birthdate = filterStringInputPost('stu_birthdate');
	$friendliness = filterIntInputPost('stu_friendliness', -1);
	$sessionId = filterIntInputPost('ses_id');
	$cityId = filterIntInputPost('cit_id');

	// Le tableau contenant toutes les valeurs
	$errorList = array();

	// Je teste toutes les erreurs
	if (empty($lastname)) {
		$errorList[] = 'Le nom est vide';
	}
	else if (strlen($lastname) < 2) {
		$errorList[] = 'Le nom est incorrect';
	}
	if (empty($firstname)) {
		$errorList[] = 'Le prénom est vide';
	}
	else if (strlen($firstname) < 2) {
		$errorList[] = 'Le prénom est incorrect';
	}
	if (empty($email)) {
		$errorList[] = 'L\'email est vide';
	}
	else if (filter_var($email,  FILTER_VALIDATE_EMAIL) === false) {
		$errorList[] = 'L\'email est incorrect';
	}
	if (empty($birthdate)) {
		$errorList[] = 'La date de naissance est vide';
	}
	if ($friendliness < 0 || $friendliness > 5) {
		$errorList[] = 'La sympathie est incorrecte';
	}
	if (empty($sessionId)) {
		$errorList[] = 'La session n\'est pas renseignée';
	}
	if (empty($cityId)) {
		$errorList[] = 'La ville n\'est pas renseignée';
	}

	// Si aucune erreur
	if (empty($errorList)) {
		// J'appelle la fonction ajoutant le student à la DB
		$studentId = addStudent(
			$lastname,
			$firstname,
			$email,
			$birthdate,
			$friendliness,
			$sessionId,
			$cityId
		);

		// Si ajout ok
		if ($studentId > 0) {
			// Je redirige sur sa page
			header('Location: edit.php?id='.$studentId);
			exit;
		}
	}
}

// Je récupère toutes les villes
$citiesList = getAllCities();

// Je récupère toutes les sessions
$sessionsList = getAllSessions();

// Pour éviter les notices dans la vue, j'initialise mon tableau de données
$studentInfos = array(
	'stu_id' => 0,
	'stu_lastname' => '',
	'stu_firstname' => '',
	'stu_email' => '',
	'stu_birthdate' => '',
	'stu_friendliness' => '',
	'session_ses_id' => '',
	'city_cit_id' => '',
	'cit_name' => '',
	'stu_age' => '',
);

*/




//=====================================
// FILE INCLUSION
//=====================================
include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/addmovie.php';
include dirname(dirname(__FILE__)).'/view/footer.php';
