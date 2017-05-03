<?php $this->layout('layout-back', ['title' => 'Créer un évènement']); ?>
<?php $this->start('main_content'); ?>

<div class="container text-center">
    <h1>Créer un événement</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <a href="<?= $this->url('event_index'); ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
        </div>

        <div class="col-lg-8">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="events_title">Titre : </label>
                    <input class="form-control" type="text" name="events_title" id="events_title">
                    <?= (isset($messages['events_title'])) ? '<span class="help-block">' .$messages['events_title'] . '</span>' : '' ?>
                </div>
                <div class="form-group">
                    <label for="events_description"> Description : </label>
                    <textarea class="form-control" name="events_description" id="events_description"></textarea>
                    <?= (isset($messages['events_description'])) ? '<span class="help-block">' .$messages['events_description'] . '</span>' : '' ?>
                </div>
                <div class="form-group">
                    <label for="events_localization"> Lieu : </label>
                    <input type="text" class="form-control" name="events_localization" id="events_localization">
                    <?= (isset($messages['events_localization'])) ? '<span class="help-block">' .$messages['events_localization'] . '</span>' : '' ?>
                </div>
                <div class="form-group">
                    <label for="events_hours"> Horaires : </label>
                    <input type="text" class="form-control" name="events_hours" id="events_hours">
                    <?= (isset($messages['events_hours'])) ? '<span class="help-block">' .$messages['events_hours'] . '</span>' : '' ?>
                </div>
                <div class="form-group">
                    <label for="events_image"> Image : </label>
                    <input type="file" name="events_image" id="events_image">
                    <?= (isset($messages['events_size'])) ? '<span class="help-block">' .$messages['events_size'] . '</span>' : '' ?>
                    <?= (isset($messages['events_type'])) ? '<span class="help-block">' .$messages['events_type'] . '</span>' : '' ?>
                    <?= (isset($messages['events_load'])) ? '<span class="help-block">' .$messages['events_load'] . '</span>' : '' ?>
                </div>
                <div class="form-group">
                    <label for="events_ages"> A quels secteurs s'appliquent cet événement ? </label><br/>
                    <label><input type="checkbox" name="events_3to5" value=""/> 3 - 5 ans</label><br>
                    <label><input type="checkbox" name="events_6to12" value=""/> 6 - 12 ans</label><br>
                    <label><input type="checkbox" name="events_12to16" value=""/> 12 - 16 ans</label><br>
                    <label><input type="checkbox" name="events_16to25" value=""/> 16 - 25 ans</label><br>
                    <label><input type="checkbox" name="events_adults" value=""/> Adultes - Famille</label><br>
                </div>
                <button class="btn btn-submit"> Valider </button>

            </form>
        </div>
    </div>
</div>


<?php $this->stop('main_content'); ?>
