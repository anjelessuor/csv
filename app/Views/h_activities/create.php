<?php $this->layout('layout', ['title' => 'Créer une nouvelle activité vacances']); ?>

<?php $this->start('main_content'); ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="h_activities_title"> Activité : </label>
            <input id="h_activities_title" name="h_activities_title" class="form-control">
        </div>
        <div class="form-group">
            <label for="h_activities_description"> Description de l'activité : </label>
            <textarea id="h_activities_description" name="h_activities_description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="h_activities_localization"> Lieu où se déroulera l'activité : </label>
            <input id="h_activities_localization" name="h_activities_localization" class="form-control">
        </div>
        <div class="form-group">
            <label for="h_activities_dates"> Dates de l'activité : </label>
            <input id="h_activities_dates" name="h_activities_dates" class="form-control">
        </div>
        <div class="form-group">
            <label for="h_activities_hours"> Horaires de l'activité : </label>
            <input id="h_activities_hours" name="h_activities_hours" class="form-control">
        </div>
        <div class="form-group">
            <label for="h_activities_image"> Illustration de l'activité : </label>
            <input type="file" id="h_activities_image" name="h_activities_image" class="form-control">
        </div>
        <div class="form-group">
            <label for="h_activities_price"> Tarif de l'activité : </label>
            <input id="h_activities_price" name="h_activities_price" class="form-control">
        </div>
        <div class="form-group">
            <label for="h_activities_ages"> A quels secteurs s'appliquent cette activité ? </label><br/>
            <label><input type="checkbox" name="h_activities_3to5" value="1"/> 3 à 5 ans</label><br/>
            <label><input type="checkbox" name="h_activities_6to12" value="1"/> 6 à 12 ans</label><br/>
            <label><input type="checkbox" name="h_activities_12to16" value="1"/> 12 à 16 ans</label><br/>
            <label><input type="checkbox" name="h_activities_16to25" value="1"/> 16 à 25 ans</label><br/>
            <label><input type="checkbox" name="h_activities_adults" value="1"/> Adultes et familles</label><br/>
        </div>

        <button class="btn btn-submit"> Valider </button>
    </form>

<?php $this->stop('main_content'); ?>
