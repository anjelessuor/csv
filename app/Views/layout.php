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
	<nav class="navbar navbar-inverse">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">Centre Social Vauban</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="menu">
				<ul class="nav navbar-nav">
					<li><a href="">Accueil</a></li>
					<li><a href="">Secteur enfance (3 - 5 ans)</a></li>
					<li><a href="">Secteur enfance (6 - 12 ans)</a></li>
					<li><a href="">Secteur enfance (12 - 16 ans)</a></li>
					<li><a href="">Secteur jeunes (16 - 25 ans)</a></li>
					<li><a href="">Secteur adultes et familles</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
						<li><a href="">Connexion</a></li>
						<li><a href="">Inscription</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
	</nav>
	<div class="container">


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
