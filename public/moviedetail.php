<?php

// access to config file
require dirname(dirname(__FILE__)).'/inc/config.php';



// Je récupère le paramètre dans l'URL
$movieId = isset($_GET['mov_id']) ? intval($_GET['mov_id']) : 0;



//=====================================
// FILE INCLUSION
//=====================================
include dirname(dirname(__FILE__)).'/view/header.php';
include dirname(dirname(__FILE__)).'/view/moviedetail.php';
include dirname(dirname(__FILE__)).'/view/footer.php';
