<?php $this->layout('layout', ['title' => 'Evénements']) ?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
    <?php foreach($events as $event) : ?>
    <div class="row">
        <div class="col-md-5">
            <div class="img-responsive">
                <img src="/csv/public/uploads/eventsImage/<?php echo $event['events_image']; ?>" class="img-thumbnail" width="100%" height="100%">
            </div>
        </div>
        <div class="col-md-7">
            <div class="eventText">
                <h1><?php echo $event['events_title']; ?></h1>
                <p><?php echo $event['events_description']; ?></p>
                <p><?php echo $event['events_localization']; ?></p>
                <p><?php echo $event['events_hours']; ?></p>
            </div>
        </div>
        <div class="image-test">
        </div>
     </div>
    <?php endforeach; ?>
</div>


<?php $this->stop('main_content'); ?>
