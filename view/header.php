<!-- Ici on détermine à quoi ressemblera le header qui se répétera sur toutes les pages -->
<!DOCTYPE html>
<html>
	<head>
		<title>Team Projet IMDb</title>
		<!-- Le meta charset permet de visualiser les accents, charactères spéciaux, etc. -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Latest compiled and minified CSS for Bootstrap -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- jQuery -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

		<!-- Stylesheet -->
		<link rel="stylesheet" href="css/main.css">
		<style type="text/css">
			body {
				padding-top: 70px;
			}
		</style>
	</head>
	<!-- Début du body (ce qui est "visible" sur la page) -->
	<body>
		<!-- Nous ouvrons une balise nav pour y mettre notre navigation (une liste de liens non-ordonnés, unordened list) ainsi que la barre de recherche -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
        		<div class="navbar-header">
        			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            			<span class="sr-only">Toggle navigation</span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
            			<span class="icon-bar"></span>
          			</button>
          			<a class="navbar-brand" href="index.php">Projet imdb</a>
        		</div>
        		<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="active">
							<a href="index.php">Accueil</a>
						</li>
						<li class="active">
							<a href="categories.php">Catégories</a>
						</li>
						<li class="active">
							<a href="addmovie.php">Ajouter un film</a>
						</li>
					</ul>
					<form action="catalog.php" class="navbar-form navbar-right" method="get">
						<div class="form-group">
							<input type="text" name="s" class="form-control" placeholder="Search">
							<button type="submit" class="btn btn-success bn-sm">OK</button>
						</div>
					</form>
				</div>
			</div>
		</nav>
		<hr>
