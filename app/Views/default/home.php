<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
	<h1>Centre Social Vauban</h1>
	<p>Vous avez atteint la page d'accueil. Bravo.</p>
	<p>Et maintenant, RTFM dans <strong><a href="../docs/tuto/" title="Documentation de W">docs/tuto</a></strong>.</p>

	<div id="carousse">
<div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">

  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
    <li data-target="#bs-carousel" data-slide-to="1"></li>
    <li data-target="#bs-carousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item slides active">
      <div class="slide-1"></div>
      <div class="hero">
        <hgroup>
            <h1>We are jdflkgjdfkgjdfklgjdfg</h1>
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-2"></div>
      <div class="hero">
        <hgroup>
            <h1>We are smart</h1>
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
    <div class="item slides">
      <div class="slide-3"></div>
      <div class="hero">
        <hgroup>
            <h1>We are amazing</h1>
            <h3>Get start your next awesome project</h3>
        </hgroup>
        <button class="btn btn-hero btn-lg" role="button">See all features</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6">	
				<h2>Qu'est ce que c'est</h2>
		</div>
		<div class="col-md-6">
				<h2>doc download</h2>
				<ul>
					<li>vcbncvbn</li>
					<li>cvbncvb</li>
					<li>cvbncvn</li>
				</ul>
		</div>
	</div>
</div>

<?php $this->stop('main_content') ?>
