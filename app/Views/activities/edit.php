<?php $this->layout('layout-back', ['title' => 'Mettre à jour l\'activité '.$activities['activities_title']]); ?>
<?php $this->start('main_content'); ?>


    <div class="container text-center">
        <h1>Mettre à jour l'activité <?= $activities['activities_title'] ?></h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?php echo $this->url('activities_index') ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
            </div>
            <div class="col-lg-8">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="activities_title"> Activité : </label>
                        <input id="activities_title" name="activities_title" class="form-control" value="<?php echo $activities['activities_title']; ?>">
                        <?= (isset($messages['activities_title'])) ? '<span class="help-block">' .$messages['activities_title'] . '</span>' : '' ?>
                    </div>
                    <div class="form-group">
                        <label for="activities_description"> Description de l'activité : </label>
                        <textarea class="form-control" name="activities_description" id="activities_description"><?php echo $activities['activities_description'] ?></textarea>
                        <?= (isset($messages['activities_description'])) ? '<span class="help-block">' .$messages['activities_description'] . '</span>' : '' ?>
                    </div>
                    <div class="form-group">
                        <label for="activities_ages"> A quels secteurs s'appliquent cette activité ?</label><br/>
                        <label><input type="checkbox" name="activities_3to5" value="1" /> 3 à 5 ans</label><br>
                        <label><input type="checkbox" name="activities_6to12" value="1" /> 6 à 12 ans</label><br>
                        <label><input type="checkbox" name="activities_12to16" value="1" /> 12 à 16 ans</label><br>
                        <label><input type="checkbox" name="activities_16to25" value="1" /> 16 à 25 ans</label><br>
                        <label><input type="checkbox" name="activities_adults" value="1" /> Adultes et familles</label><br>
                    </div>

                    <button class="btn btn-submit"> Valider </button>
                </form>
            </div>
        </div>
    </div>
<?php $this->stop('main_content'); ?>
