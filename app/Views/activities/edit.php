<?php $this->layout('layout', ['title' => 'Mettre à jour l\'activité '.$activities['activities_title']]); ?>
<?php $this->start('main_content'); ?>
    <div>
        <a href="<?= $this->url('activities_index'); ?>" class="btn btn-success">Revenir à la liste des activités</a>
    </div>

    <form action="" method="POST">
        <div class="form-group">
            <label for="activities_title"> Activité : </label>
            <input id="activities_title" name="activities_title" class="form-control" value="<?php echo $activities['activities_title']; ?>">
        </div>
        <div class="form-group">
            <label for="activities_description"> Description de l'activité : </label>
            <input id="activities_description" name="activities_description" class="form-control" value="<?php echo $activities['activities_description']; ?>">
        </div>
        <div class="form-group">
            <label for="activities_ages"> A quels secteurs s'appliquent cette activité ? </label>
            <label><input type="checkbox" name="activities_3to5" value="1" /> 3 à 5 ans</label><br>
            <label><input type="checkbox" name="activities_6to12" value="1" /> 6 à 12 ans</label><br>
            <label><input type="checkbox" name="activities_12to16" value="1" /> 12 à 16 ans</label><br>
            <label><input type="checkbox" name="activities_16to25" value="1" /> 16 à 25 ans</label><br>
            <label><input type="checkbox" name="activities_adults" value="1" /> Adultes et familles</label><br>
        </div>

        <button class="btn btn-submit"> Valider </button>
    </form>

<?php $this->stop('main_content'); ?>
