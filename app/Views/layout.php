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
		<div class="cd-logo"><img src="<?= $this->assetUrl('img/cd-logo.svg') ?>" alt=""></a></div>
		<nav>
			<ul class="cd-secondary-nav">
				<li><a class="smoothscroll" href="#home" href="<?php echo $this->url('default_home'); ?>">ACCUEIL</a></li>
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

		<a class="cd-primary-nav-trigger" href="#">
			<span class="cd-menu-text">Menu</span>
			<span class="cd-menu-icon"></span>
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

			<li class="cd-label">Follow us</li>
			<li class="cd-social cd-facebook"><a href="#0">Facebook</a></li>
		</ul>
	</nav>
<!--END NAVBAR-->
<!--parallax effect  -->



<!--Section field-->

      <!-- <section> -->
        <?= $this->section('main_content') ?>
      <!-- </section> -->

<!--Section field END-->

<!--Footer-->

<footer>
      <div class="container">

            <ul class="social-links">
               <li><a href="#"><i class="fa fa-facebook"></i></a></li>
               <li><a href="#"><i class="fa fa-twitter"></i></a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
               <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
               <li><a href="#"><i class="fa fa-instagram"></i></a></li>
               <li><a href="#"><i class="fa fa-skype"></i></a></li>
            </ul>
            <ul class="copyright">
               <li>&copy; Copyright 2017 </li>
               <li>Design by <a title="Styleshout" href="http://www.google.com/">Rising Goone Squad</a></li>
            </ul>

         <div id="go-top"><a class="smoothscroll" title="Back to Top" href="#home"><i class="icon-up-open"></i></a></div>
      </div>
   </footer> <!-- Footer End-->
<!--Footer END-->

<!-- SCRIPTS -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/parallax.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/jQuery-3.1.1.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/app.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/main.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/modernizr.js'); ?>"></script>


</body>
</html>
