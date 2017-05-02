<?php $this->layout('layout-back', ['title' => 'Mettre à jour l\'activité '.$h_activities['h_activities_title']]); ?>
<?php $this->start('main_content'); ?>

    <div class="container text-center">
        <h1>Mettre à jour l'activité <?= $h_activities['h_activities_title'] ?></h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?php echo $this->url('h_activities_index') ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
            </div>
            <div class="col-lg-8">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="h_activities_title"> Activité : </label>
                        <input id="h_activities_title" name="h_activities_title" class="form-control" value="<?php echo $h_activities['h_activities_title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="h_activities_description"> Description de l'activité : </label>
                        <textarea class="form-control" name="h_activities_description" id="h_activities_description"><?php echo $h_activities['h_activities_description'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="h_activities_ages"> A quels secteurs s'appliquent cette activité ?</label><br/>
                        <label><input type="checkbox" name="h_activities_3to5" value="1" /> 3 à 5 ans</label><br>
                        <label><input type="checkbox" name="h_activities_6to12" value="1" /> 6 à 12 ans</label><br>
                        <label><input type="checkbox" name="h_activities_12to16" value="1" /> 12 à 16 ans</label><br>
                        <label><input type="checkbox" name="h_activities_16to25" value="1" /> 16 à 25 ans</label><br>
                        <label><input type="checkbox" name="h_activities_adults" value="1" /> Adultes et familles</label><br>
                    </div>

                    <button class="btn btn-submit"> Valider </button>
                </form>
            </div>
        </div>
    </div>


<?php $this->stop('main_content'); ?>
