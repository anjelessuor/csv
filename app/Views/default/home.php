<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<section>
<div class="container-fluid">
	<div class="row">

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
	</div>
<!-- 1st parallax  -->
</section>

<div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="https://static.pexels.com/photos/106116/pexels-photo-106116.jpeg" data-natural-width="1400" data-natural-height="900"></div>

<section>

<!--2nd Part-->

	<div class="row" id="part2">
		<div class="col-md-6">
			<div class="informationAccueil whatIsIt">
				<h2>Qu'est ce que c'est</h2>
				<p>blablablabla</p>
			</div>
		</div>
				<div class="col-md-6">
				<div class="informationAccueil downloadDocumentation">
						<button style class="btn btn-hero btn-lg" role="button"><i class="fa fa-download" aria-hidden="true"></i> Télécharger </button>
								<ul>
									<li>Charte des centres sociaux <a href="./uploads/Charte-des-centres-sociaux-et-socioculturels-de-France.pdf"> Download file</a></li>
									<li>Placeholder</li>
									<li>Placeholder</li>
								</ul>
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
						</div> <a class="ophbtn" >See all openinghours <i class="fa fa-caret-right fa-fw"></i> </a>
							<table class="tg">
								<tr class="lun"></tr>
								<tr class="mar"></tr>
								<tr class="ven"></tr>
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

        // echo $name;
        // echo $email;
        // echo $message;

        mail('', $firstname, $lastname, $message."  ".$email);
} ?>

			        <div class="col-md-6" id= "contact">

							<h2>Contactez-nous</h2>
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
<br>
<!--END Contact-->



<div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="https://static.pexels.com/photos/346297/pexels-photo-346297.jpeg" data-natural-width="1920" data-natural-height="1200"></div>
</section>
<!--3rd parallax  -->
<?php $this->stop('main_content') ?>
