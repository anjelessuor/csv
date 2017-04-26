<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<h1>Centre Social Vauban</h1>
	<p>Vous avez atteint la page d'accueil. Bravo.</p>
	<p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p>
	</br></br>


<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
		<?php foreach($events as $key => $event) : ?>
    <li data-target="#bs-carousel" data-slide-to="<?= $key ?>" class="active"></li>
		<?php endforeach; ?>
	</ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
		<?php foreach($events as $event) : ?>
    <div class="item slides active">
      <div style="background-image: url(public\upload\download\event\<?php echo $this->url( 'event_view', [ 'events_image' => $event['events_image']] );?><?php echo $event['events_image']; ?>);" class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1><?php echo $this->url( 'event_view', [ 'events_id' => $event['events_id']] );?><?php echo $event['event_title']; ?></h1>
            <p><?php echo $this->url( 'event_view', [ 'events_description' => $event['events_description']] );?><?php echo $event['events_description']; ?></p>
						<p><?php echo $this->url( 'event_view', [ 'events_localization' => $event['events_localization']] );?><?php echo $event['events_localization']; ?></p>
						<p><?php echo $this->url( 'event_view', [ 'events_hours' => $event['events_hours']] );?><?php echo $event['events_hours']; ?></p>
				</hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
		<?php endforeach; ?>
  </div>
</div>
</br></br>

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
					<li>vcbncvbn</li>
					<li>cvbncvb</li>
					<li>cvbncvn</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php $this->stop('main_content') ?>
