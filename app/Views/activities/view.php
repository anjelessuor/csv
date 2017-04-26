<?php $this->layout('layout', ['title' => $activities['activities_title']]); ?>
<?php $this->start('main_content'); ?>

    <div>
        <a href="<?= $this->url('activities_index'); ?>">Revenir à la liste des activités</a>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <p><?php echo $activities['activities_image']; ?></p>
        </div>
        <div class="col-lg-6">
            <h2><?php echo $activities['activities_title']; ?></h2>
            <br>
            <p><?php echo $activities['activities_description']; ?></p>
            <br>
            <p><?php echo $activities['activities_localization']; ?></p>
            <br>
            <p><?php echo $activities['activities_hours']; ?></p>
            <br>
            <p>Secteurs concernés par cette activité : </p>
            <p><?php echo $activities['activities_3to5']; ?></p>

        </div>
    </div>
