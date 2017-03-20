<?php

// Inclusion de config.php
// double dirname pour retrouver le répertoire parent
require dirname(dirname(__FILE__)).'../inc/config.php';

// Je récupère les données de la database dont j'ai besoin
$sql = '
	SELECT 
';

// FIN du code pour cette page

// À la fin, je met les vues/views comme toujours
include dirname(dirname(__FILE__)).'../view/header.php';
include dirname(dirname(__FILE__)).'../view/home.php';
include dirname(dirname(__FILE__)).'../view/footer.php';