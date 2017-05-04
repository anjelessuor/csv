<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?= $this->assetUrl('css/styletest.css') ?>">

</head>
<body>

	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->




			<?= $this->section('main_content') ?>

			

</div>

		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script type="text/javascript" src="<?= $this->assetUrl('js/parallax.min.js'); ?>"></script>
		<script type="text/javascript" src="<?= $this->assetUrl('js/bootstrap.min.js'); ?>"></script>
	</body>
</html>
