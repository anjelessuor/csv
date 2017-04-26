<?php $this->layout('layout', ['title' => 'Créer un évènement']); ?>
<?php $this->start('main_content'); ?>

    <form method="POST" action="">
        <div class="form-group">
            <label for="events_title">Titre : </label>
            <input class="form-control" type="text" name="events_title" id="events_title">
        </div>
        <div class="form-group">
            <label for="events_description"> Description : </label>
            <textarea class="form-control" name="events_description" id="events_description"></textarea>
        </div>
        <div class="form-group">
            <label for="events_localization"> Lieu : </label>
            <input type="text" class="form-control" name="events_localization" id="events_localization">
        </div>
        <div class="form-group">
            <label for="events_hours"> Horaires : </label>
            <input type="text" class="form-control" name="events_hours" id="events_hours">
        </div>
        <div class="form-group">
            <label for="events_image"> Image : </label>
            <input type="url" class="form-control" name="events_image" id="events_image">
        </div>
        <div class="form-group">
            <label for="events_3to5">
                <input type="radio" name="events_3to5" value="events_3to5"/> 3 - 5 ans
            </label><br>
            <label for="events_6to12">
                <input type="radio" name="events_6to12" value="events_6to12"/> 6 - 12 ans
            </label><br>
            <label for="events_12to16">
                <input type="radio" name="events_12to16" value="events_12to16"/> 12 - 16 ans
            </label><br>
            <label for="events_16to25">
                <input type="radio" name="events_16to25" value="events_16to25"/> 16 - 25 ans
            </label><br>
            <label for="events_adults">
                <input type="radio" name="events_adults" value="events_adults"/> Adultes - Famille
            </label><br>
        </div>
        <button class="btn btn-submit">Publier : </div>
    </form>

<?php $this->stop('main_content'); ?>
