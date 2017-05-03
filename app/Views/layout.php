<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/font-awesome.min.css') ?>">
	<style>@import url('https://fonts.googleapis.com/css?family=Lato');</style>
</head>
	<body>

<!--Navbar-->
		<header class="cd-header">
		<div class="cd-logo"><a href="#"><img src="./assets/img/cd-logo.svg" alt="Placeholder"></a></div>
		<nav>
			<ul class="cd-secondary-nav">
				<li><a href="<?php echo $this->url('default_home'); ?>">ACCUEIL</a></li>
				<li><a href="<?php echo $this->url('section_qui-sommes-nous'); ?>">QUI SOMMES-NOUS ?</a></li>
				<li><a href="<?php echo $this->url('section_enfance-3-5'); ?>">SECTEUR ENFANCE (3-5ans)</a></li>
				<li><a href="<?php echo $this->url('section_enfance-6-12'); ?>">SECTEUR ENFANCE (6-12ans)</a></li>
				<li><a href="<?php echo $this->url('section_enfance-12-16'); ?>">SECTEUR ENFANCE (12-16ans)</a></li>
				<li><a href="<?php echo $this->url('section_jeunes'); ?>">SECTEUR JEUNES</a></li>
				<li><a href="<?php echo $this->url('section_adultes-et-famille'); ?>">Adultes et Famille</a></li>
				<li><a href="<?php echo $this->url('section_events'); ?>">Evénements</a></li>
				<li><a href="<?php echo $this->url('security_login'); ?>">Log IN</a></li>
			</ul>
		</nav> <!-- cd-nav -->

		<a class="cd-primary-nav-trigger" href="#0">
			<span class="cd-menu-text">Menu</span><span class="cd-menu-icon"></span>
		</a> <!-- cd-primary-nav-trigger -->
	</header>
	<nav>
		<ul class="cd-primary-nav">
			<li class="cd-label">QUI SOMMES-NOUS ?</li>

			<li><a href="#0">Nos Valeur</a></li>
			<li><a href="#0">Nos Mission</a></li>
			<li><a href="#0">Nos Partenaires</a></li>
			<li><a href="#0">Contact</a></li>

			<li class="cd-label">next Seperate</li>

			<li><a href="#0">LoremIpsum</a></li>
			<li><a href="#0">LoremIpsum</a></li>
			<li><a href="#0">LoremIpsum</a></li>

			<li class="cd-label">next Seperate</li>

			<li><a href="#0">LoremIpsum</a></li>
			<li><a href="#0">LoremIpsum</a></li>
			<li class="cd-label">next Seperate</li>

			<li><a href="#0">LoremIpsum</a></li>
			<li><a href="#0">LoremIpsum</a></li>
			<li class="cd-label">next Seperate</li>

			<li><a href="#0">LoremIpsum</a></li>
			<li><a href="#0">LoremIpsum</a></li>

			<li class="cd-label">Follow us</li>
			<li class="cd-social cd-facebook"><a href="#0">Facebook</a></li>
		</ul>
	</nav>
<!--END NAVBAR-->


<!--Section field-->

<div class="container-fluid">
  <div class="row">
    <div class="col-xs-12">
      <section>
        <?= $this->section('main_content') ?>
      </section>
    </div>
  </div>
</div>
<!--Section field END-->


<!--Footer-->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-md-12">
				<p> Copyright 2017 - Rising Goone Squad </p>
			</div>
		</div>
	</div>
</footer>
<!--Footer END-->

<!-- SCRIPTS -->
	<script type="text/javascript" src="<?= $this->assetUrl('js/jQuery-3.1.1.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/app.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/main.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/modernizr.js'); ?>"></script>


</body>
</html>
