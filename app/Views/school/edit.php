<?php $this->layout('layout-back', ['title' => 'Mettre à jour un accompagnement']); ?>
<?php $this->start('main_content'); ?>

    <div class="container text-center">
        <h1>Mettre à jour l'accompagnement <?= $school['school_title'] ?></h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?php echo $this->url('school_index') ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
            </div>
            <div class="col-lg-8">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="school_title"> Accompagnement : </label>
                        <input id="school_title" name="school_title" class="form-control" value="<?php echo $school['school_title']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="school_description"> Description : </label>
                        <textarea class="form-control" name="school_description" id="school_description"><?php echo $school['school_description'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="school_ages"> A quels secteurs s'appliquent cet accompagnement ?</label><br/>
                        <label><input type="checkbox" name="school_3to5" value="1" /> 3 à 5 ans</label><br>
                        <label><input type="checkbox" name="school_6to12" value="1" /> 6 à 12 ans</label><br>
                        <label><input type="checkbox" name="school_12to16" value="1" /> 12 à 16 ans</label><br>
                        <label><input type="checkbox" name="school_16to25" value="1" /> 16 à 25 ans</label><br>
                        <label><input type="checkbox" name="school_adults" value="1" /> Adultes et familles</label><br>
                    </div>
                    <button class="btn btn-submit"> Valider </button>
                </form>
            </div>
        </div>
    </div>

<?php $this->stop('main_content'); ?>
