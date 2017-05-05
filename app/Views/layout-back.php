<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/styleback.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/font-awesome.min.css') ?>">
	<style>@import url('https://fonts.googleapis.com/css?family=Lato');</style>
</head>
	<body>


<!--Navbar Backoffice-->

<!--<div class="nav2">
	<div class="drop1"><a href="<?php echo $this->url('display_index'); ?>"><i class="fa fa-cogs fa-2x"></i></a></div>
	<div class="drop2"><a href="<?php echo $this->url('display_index'); ?>"><i class="fa fa-cogs fa-2x"></i></a></div>
	<div class="drop3"><a href="<?php echo $this->url('display_index'); ?>"><i class="fa fa-cogs fa-2x"></i></a></div>
	<div class="drop4"><a href="<?php echo $this->url('display_index'); ?>"><i class="fa fa-cogs fa-2x"></i></a></div>
	<div class="drop5"><a href="<?php echo $this->url('display_index'); ?>"><i class="fa fa-cogs fa-2x"></i></a></div>
	<div class="drop6"><a href="<?php echo $this->url('display_index'); ?>"><i class="fa fa-cogs fa-2x"></i></a></div>
	<div class="mask2"><i class="fa fa-cogs fa-3x"></i></div>
</div>-->

<!--Navbar End-->

<!--Section field-->
<section>
	<div class="container-fluid">
		<div class="row"
		<?= $this->section('main_content') ?>
		</div>
	</div>	
</section>





<!--Section field END-->

<!--Footer-->
<section>
	<footer>

	</footer>
</section>
<!--Footer END-->

<!-- SCRIPTS -->
	<script type="text/javascript" src="<?= $this->assetUrl('js/jQuery-3.1.1.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= $this->assetUrl('js/appback.js'); ?>"></script>



	</body>
</html>
