<?php $this->layout('layout', ['title' => 'Evénements']) ?>

<?php $this->start('main_content'); ?>

<div id="events" class="container">
    <?php foreach($events as $event) : ?>
    <div class="row">
        <div class="col-md-7">
            <div class="img-responsive">
                <img src="/csv/public/uploads/eventsImage/<?php echo $event['events_image']; ?>" class="img-thumbnail" width="100%" height="100%">
            </div>
        </div>
        <div class="col-md-5">
            <div class="eventText">
                <h1><?php echo $event['events_title']; ?></h1>
                <h3><?php echo $event['events_description']; ?></h3>
                <h3><?php echo $event['events_localization']; ?></h3>
                <h3><?php echo $event['events_hours']; ?></h3>
            </div>
        </div>
     </div>
    <?php endforeach; ?>
</div>


<div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="https://static.pexels.com/photos/6227/hands-technology-photo-phone.jpg" data-natural-width="1400" data-natural-height="900"></div>


<?php $this->stop('main_content'); ?>
