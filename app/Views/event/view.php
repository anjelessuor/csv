<?php $this->layout('layout-back', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<br>
<div class="container">
    <div class="row">
       <div class="col-xs-11">

<div>
    <a href="<?= $this->url('event_index'); ?>" class="btn btn-warning">Retour</a>
</div>

<div class="row">
    <div class="col-lg-6">
        <h2><?php echo $event['events_image']; ?></h2>
    </div>
    <div class="col-lg-6">
        <p>Evénement</p>
        <p><?php echo $event['events_title']; ?></p>
        <br>
        <p>Description</p>
        <p><?php echo $event['events_description']; ?></p>
        <br>
        <p>Lieu</p>
        <p><?php echo $event['events_localization']; ?></p>
        <br>
        <p>Horaires</p>
        <p><?php echo $event['events_hours']; ?></p>
        <br>
        <p>Secteurs concernés par cet évènement : </p>
        <p><?php
        if($event['events_3to5'] == 1){
            echo "Secteur Enfance 3 à 5 ans";
        };
        echo "<br/>";
        if($event['events_6to12'] == 1){
            echo "Secteur Enfance 6 à 12 ans";
        };
        echo "<br/>";
        if($event['events_12to16'] == 1){
            echo "Secteur Jeune 12 à 16 ans";
        };
        echo "<br/>";
        if($event['events_16to25'] == 1){
            echo "Secteur Jeune 16 à 25 ans";
        };
        echo "<br/>";
        if ($event['events_adults'] == 1){
            echo "Secteur Adultes et famille";
        };  ?></p>

        <br>

        <a href="<?= $this->url('event_update', ['events_id' => $event['events_id']]); ?>" class="btn btn-primary">Modifier</a>
        <a href="<?= $this->url('event_index'); ?>" class="btn btn-warning">Retour</a>

    </div>
</div>
</div>


<?php $this->stop('main_content') ?>
