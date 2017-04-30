<?php $this->layout('layout-back', ['title' => 'Modifier un événement' .$event['events_title']]); ?>
<?php $this->start('main_content'); ?>

<br>
<div class="container">
    <div class="row">
       <div class="col-xs-11">

    <!-- Lien pour retour sur liste event -->
    <div>
        <a href="<?= $this->url('event_index'); ?>" class="btn btn-warning">Revenir à la liste</a>
    </div>
    <br>

    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="events_title">Titre : </label>
            <input class="form-control" type="text" name="events_title" id="events_title" value="<?php echo $event['events_title']?>">
        </div>
        <div class="form-group">
            <label for="events_description"> Description : </label>
            <input class="form-control" name="events_description" id="events_description" value="<?php echo $event['events_description']?>">
        </div>
        <div class="form-group">
            <label for="events_localization"> Lieu : </label>
            <input type="text" class="form-control" name="events_localization" id="events_localization" value="<?php echo $event['events_localization']?>">
        </div>
        <div class="form-group">
            <label for="events_hours"> Horaires : </label>
            <input type="text" class="form-control" name="events_hours" id="events_hours"  value="<?php echo $event['events_hours']?>">
        </div>
        <div class="form-group">
            <label for="events_image"> Image : </label>
            <input type="file" name="events_image" id="events_image">
        </div>
        <div class="form-group">
            <label for="events_3to5">
                <input type="checkbox" name="events_3to5" value=""/> 3 - 5 ans
            </label><br>
            <label for="events_6to12">
                <input type="checkbox" name="events_6to12" value=""/> 6 - 12 ans
            </label><br>
            <label for="events_12to16">
                <input type="checkbox" name="events_12to16" value=""/> 12 - 16 ans
            </label><br>
            <label for="events_16to25">
                <input type="checkbox" name="events_16to25" value=""/> 16 - 25 ans
            </label><br>
            <label for="events_adults">
                <input type="checkbox" name="events_adults" value=""/> Adultes - Famille
            </label><br>
        </div>

        <button class="btn btn-submit">Modifier</div>
    </form>

<?php $this->stop('main_content'); ?>
