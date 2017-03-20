<?php
/*---------------------------------------------
CONFIGURATION FILE with access
to the database and functions
---------------------------------------------*/

// the config file contains all the configuration values which change on different servers (dev and prod, e.g.)
$config = array(
		'DB_username' => 'christianb',
		'DB_password' => 'webforce3',
		'DB_database' => 'christianb_sql0',
		'DB_host' => 'wf3.progweb.fr',
	);

// inclusion of the connection to the database
require_once dirname(__FILE__).'/db.php';

// inclusion of all the functions
require_once dirname(__FILE__).'/functions.php';
