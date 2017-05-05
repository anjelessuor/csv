<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<!-- 1st parallax  -->

<div class="container-fluid">
	<div class="row">
<section>
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
									<h3><?php echo $event['events_localization']; ?></h3>
									<h3><?php echo $event['events_hours']; ?></h3>
								</hgroup>
				<a class="btn btn-hero btn-lg" href="<?php echo $this->url('section_events'); ?>">Plus d'informations</button></a>
			</div>
		</div>

		<?php endforeach; ?>
	</div>
</div>

	</div>
	</div>
<!-- 1st parallax  -->
</section>

<div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="https://static.pexels.com/photos/106116/pexels-photo-106116.jpeg" data-natural-width="1400" data-natural-height="900"></div>
<br>
<section>

<!--2nd Part-->
<div class="container-fluid">
	<div class="row" id="part2">
		<div class="col-md-6">
			<div class="informationAccueil whatIsIt">
				<h1>Qu'est ce que c'est</h1>
				<br>

				<p><?php echo $presentation[0]['presentation_description']; ?></p>

			</div>
		</div>

				<div class="col-md-6">
				<div class="informationAccueil downloadDocumentation">
					<button style class="btn btn-hero btn-lg" role="button"><i class="fa fa-download" aria-hidden="true"></i> Documents </button>
					<ul>
						<li>Charte des centres sociaux <a href="./uploads/Charte-des-centres-sociaux-et-socioculturels-de-France.pdf"> Download file</a></li>
						<li>Placeholder</li>
						<li>Placeholder</li>
						<li>Placeholder</li>
					</ul>
				</div>
			</div>
	</div>
</div>
<!--END 2nd Part  -->

<!--2nd parallax -->
</section>

<div class="parallax-container" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-image-src="https://static.pexels.com/photos/7096/people-woman-coffee-meeting.jpg" data-natural-width="1400" data-natural-height="900"></div>

<!--3rd Part Hours / Contact / Map-->

<div class="container-fluid">
    <div class="row" id="part3">
<!--parallax  -->
<section>
<!-- OPENING hours-->
	        <div class="col-md-6" id= "timer">
					<div id="opclHolder">
						<div id="opcl">
								<div id="todayholder"></div>
								<div id="timeholder"></div>
								<div id="displaytextholder"></div>
						</div> <a class="ophbtn" >horaires d'ouverture <i class="fa fa-caret-right fa-fw"></i> </a>
							<table class="tg">
								<tr class="lun"></tr>
								<tr class="mar"></tr>
								<tr class="mer"></tr>
								<tr class="jeu"></tr>
								<tr class="ven"></tr>
								<tr class="sam"></tr>
								<tr class="dim"></tr>
							</table>
						</div>
			</div>


<!--Contact-->

	<?php if (!empty($_POST)) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];


        mail($config['config_email'], $firstname." ".$lastname, $email." ".$message);
		var_dump($config);
 } ?>

			        <div class="col-md-6" id= "contact">

							<h1>Contactez-nous</h1><br>
								<form name="sentMessage" method="POST" id="contact">

									<div class="form-group">
										<label for="lastname">Nom de famille :</label>
										<input type="text" name="lastname" id="lastname" class="form-control"  placeholder="Nom de famille" required>
									</div>

									<div class="form-group">
										<label for="firstname">Prénom : </label>
										<input type="text" name="firstname" id="firstname" class="form-control"  placeholder="Prénom" required>
									</div>

									<div class="form-group">
										<label for="email">Email : </label>
										<input type="email" class="form-control" id="email" name="email"  placeholder="Email" required>
									</div>

									<div class="form-group">
										<label for="message">Votre message :</label>
										<textarea rows="10" cols="100" class="form-control" placeholder="Messages" name="message" id="message" required></textarea>
									</div>

									<div class="text-center">
										<button type="submit " class="btn btn-hero btn-lg" >Envoyer</button>
									</div>

								</form>
							</div>
			</div>
</div>
<br>
<!--END Contact-->
</section>
<div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="https://static.pexels.com/photos/2757/books-magazines-building-school.jpg" data-natural-width="1400" data-natural-height="900"></div>
<section>

<br><br>


<!-- MAP -->
<div class="container-fluid">
	<div class="row" id= "box">
		<div class="col-md-6" id= "map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2530.8322563846637!2d3.036325151433981!3d50.630232882174425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2d57ab191edf3%3A0xfb11c21b3fc1d5fd!2s77+Rue+Philippe-Laurent+Roland%2C+59000+Lille!5e0!3m2!1ses!2sfr!4v1493927150841" width="900" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
								<div class="col-md-6" id= "map2">
									<h1>Nous sommes ici</h1><br>
										<p><i class="fa fa-map-marker fa-2x" aria-hidden="true"></i> Adresse</p><br>
											<p>77 rue Philippe-Laurent Roland - 59000 Lille</p>
												</div>
											</div>
										</div>
<br>
<br>
<br>


<div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="https://static.pexels.com/photos/346297/pexels-photo-346297.jpeg" data-natural-width="1920" data-natural-height="1200"></div>
</section>
<!--3rd parallax  -->
<?php $this->stop('main_content') ?>
