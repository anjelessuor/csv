<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<?php foreach($events as $key => $event) : ?>
					<li data-target="#bs-carousel" data-slide-to="<?= $key ?>" class="<?php if ($key == 0) { echo 'active' ; } ?>"></li>
					<?php endforeach; ?>
				</ol>
	<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<?php foreach($events as $key => $event) : ?>
							<div class="item slides <?php if ($key == 0) { echo 'active' ; } ?>">
								<div style="background-image:url(../public/uploads/eventsImage/<?php echo $event['events_image']; ?>);" class="slide-1"></div>
								<div class="hero">
									<hgroup>
										<h1><?php echo $event['events_title']; ?></h1>
										<p><?php echo $event['events_localization']; ?></p>
										<p><?php echo $event['events_hours']; ?></p>
									</hgroup>
							<button style class="btn btn-hero btn-lg" role="button">Plus d'informations</button>
								</div>
							</div>
							<?php endforeach; ?>
						</div>
			</div>
		</div>


<!--bottom Part-->
<div class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="informationAccueil whatIsIt">
				<h2>Qu'est ce que c'est</h2>
			</div>
		</div>
		<div class="col-md-6">
			<div class="informationAccueil downloadDocumentation">
				<h2>doc download</h2>
				<ul>
					<li>Charte des centres sociaux <a href=""> Download file</a></li>
					<li>Placeholder</li>
					<li>Placeholder</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php $this->stop('main_content') ?>