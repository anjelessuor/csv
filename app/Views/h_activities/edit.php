<?php $this->layout('layout', ['title' => 'Mettre à jour l\'activité '.$h_activities['h_activities_title']]); ?>
<?php $this->start('main_content'); ?>
    <div>
        <a href="<?= $this->url('h_activities_index'); ?>">Revenir à la liste des activités vacances</a>
    </div>

    <form action="" method="POST">
        <div class="form-group">
            <label for="h_activities_title"> Activité : </label>
            <input id="h_activities_title" name="h_activities_title" class="form-control" value="<?php echo $h_activities['h_activities_title']; ?>">
        </div>
        <div class="form-group">
            <label for="h_activities_description"> Description de l'activité : </label>
            <input id="h_activities_description" name="h_activities_description" class="form-control" value="<?php echo $h_activities['h_activities_description']; ?>">
        </div>
        <div class="form-group">
            <label for="h_activities_price"> Tarif de l'activité : </label>
            <input id="h_activities_price" name="h_activities_price" class="form-control" value="<?php echo $h_activities['h_activities_price']; ?>">
        </div>
        <div class="form-group">
            <label for="h_activities_ages"> A quels secteurs s'appliquent cette activité ? </label>
            <label><input type="checkbox" name="h_activities_3to5" value="1" /> 3 à 5 ans</label><br>
            <label><input type="checkbox" name="h_activities_6to12" value="1" /> 6 à 12 ans</label><br>
            <label><input type="checkbox" name="h_activities_12to16" value="1" /> 12 à 16 ans</label><br>
            <label><input type="checkbox" name="h_activities_16to25" value="1" /> 16 à 25 ans</label><br>
            <label><input type="checkbox" name="h_activities_adults" value="1" /> Adultes et familles</label><br>
        </div>

        <button class="btn btn-submit"> Valider </button>
    </form>

<?php $this->stop('main_content'); ?>
