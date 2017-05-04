<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
	integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/styleError.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/font-awesome.min.css') ?>">
	<style>@import url('https://fonts.googleapis.com/css?family=Lato');</style>
</head>
	<body>

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
	<div class="container text-center">
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
