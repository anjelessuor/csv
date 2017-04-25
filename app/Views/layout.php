<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<nav class="navbar">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">Centre Social Vauban-Esquermes</a>
			</div>

			<div class="collapse navbar-collapse" id="menu">
				<ul class="nav navbar-nav">
					<li class="dropdown">
						<a data-toggle="dropdown" href="#">Accueil <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
						<ul class="dropdown-menu jqueryFadeIn">
							<li><a href="#">Présentation</a></li>
							<li class="dropdown-submenu">
								<a data-toggle="dropdown"tabindex="-1" href="#">Qui somme-nous ? </i></a>
								<ul class="dropdown-menu">
									<li><a href="#">Présentation</a></li>
									<li><a href="#">Nos valeurs</a></li>
									<li><a href="#">Nos missions</a></li>
									<li><a href="#">Contact</a></li>
									<li><a href="#">Nos sites</a></li>
									<li><a href="#">Nos partenaires</a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="dropdown">
						<a data-toggle="dropdown" href="#">Enfance 6-12 ans <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
						<ul class="dropdown-menu jqueryFadeIn">

							<li><a href="#">Présentation</a></li>
							<li class="dropdown-submenu">
								<a data-toggle="dropdown"tabindex="-1" href="#">Activités </i></a>
								<ul class="dropdown-menu">
									<li><a href="#"> Mercredis</a></li>
									<li><a href="#"> Vacances scolaires</a></li>
									<li><a href="#"> Accompagnement à la scolarité</a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="dropdown">
						<a data-toggle="dropdown" href="#">Enfance 12-16 ans <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
						<ul class="dropdown-menu jqueryFadeIn">

							<li><a href="#">Présentation</a></li>
							<li class="dropdown-submenu">
								<a data-toggle="dropdown"tabindex="-1" href="#">Activités </i></a>
								<ul class="dropdown-menu">
									<li><a href="#"> Mercredis</a></li>
									<li><a href="#"> Vacances scolaires</a></li>
									<li><a href="#"> Accompagnement à la scolarité</a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="dropdown">
						<a data-toggle="dropdown" href="#">Jeunes <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
						<ul class="dropdown-menu jqueryFadeIn">

							<li><a href="#">Présentation</a></li>
							<li class="dropdown-submenu">
								<a data-toggle="dropdown"tabindex="-1" href="#">Activités </i></a>
								<ul class="dropdown-menu">
									<li><a href="#"> Mercredis</a></li>
									<li><a href="#"> Vacances scolaires</a></li>
									<li><a href="#"> Accompagnement à la scolarité</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="dropdown">
						<a data-toggle="dropdown" href="#">Adultes et famille <i class="fa fa-chevron-down" aria-hidden="true"></i></a>
						<ul class="dropdown-menu jqueryFadeIn">
							<li><a href="#">Présentation</a></li>
							<li><a href="#">Lundi</a></li>
							<li><a href="#">Mardi</a></li>
							<li><a href="#">Mercredi</a></li>
							<li><a href="#">Jeudi</a></li>
							<li><a href="#">Vendredi</a></li>
						</ul>
					</li>


		<section>
			<?= $this->section('main_content') ?>
		</section>

	</div>

		<footer>
			<div class="container-fluid">

			</div>
		</footer>



<!-- SCRIPTS -->
	<script type="text/javascript" src="<?= $this->assetUrl('js/jQuery-3.1.1.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/app.js'); ?>"></script>
</body>
</html>
