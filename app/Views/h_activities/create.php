
<?php $this->layout('layout-back', ['title' => 'Créer une nouvelle activité']); ?>

<?php $this->start('main_content'); ?>

<div class="container text-center">
    <h1>Créer une activité vacances scolaires</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <a href="<?= $this->url('h_activities_index'); ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
        </div>
        <div class="col-lg-8">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="h_activities_title"> Activité : </label>
                    <input id="h_activities_title" name="h_activities_title" class="form-control">
                    <?= (isset($messages['h_activities_title'])) ? '<span class="help-block">' .$messages['h_activities_title'] . '</span>' : '' ?>
                </div>
                <div class="form-group">
                    <label for="h_activities_description"> Description de l'activité : </label>
                    <textarea id="h_activities_description" name="h_activities_description" class="form-control"></textarea>
                    <?= (isset($messages['h_activities_description'])) ? '<span class="help-block">' .$messages['h_activities_description'] . '</span>' : '' ?>
                </div>
                <div class="form-group">
                    <label for="h_activities_price"> Prix de l'activité : </label>
                    <input id="h_activities_price" name="h_activities_price" class="form-control">
                    <?= (isset($messages['h_activities_price'])) ? '<span class="help-block">' .$messages['h_activities_price'] . '</span>' : '' ?>
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
        </div>
    </div>
</div>

<?php $this->stop('main_content'); ?>
