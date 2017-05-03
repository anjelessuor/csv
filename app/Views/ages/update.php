<?php $this->layout('layout-back', ['title' => 'Configuration générale' .$ages['ages_name']]); ?>
<?php $this->start('main_content'); ?>


<!-- Lien pour retour sur liste des différentes catégories d'age -->
    <div class="container text-center">
        <h1>Mettre à jour la section <?= $ages['ages_name'] ?></h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?php echo $this->url('ages_index') ?>" class="btn btn-warning"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
            </div>
            <div class="col-lg-8">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="ages_name">Secteur :</label>
                        <input class="form-control" type="text" name="ages_name" id="ages_name" value="<?php echo $ages['ages_name'] ?>">
                        <?= (isset($messages['ages_name'])) ? '<span class="help-block">' .$messages['ages_name'] . '</span>' : '' ?>
                    </div>
                    <div class="form-group">
                        <label for="ages_description">Description :</label>
                        <textarea class="form-control" name="ages_description" id="ages_description"><?php echo $ages['ages_description'] ?></textarea>
                        <?= (isset($messages['ages_description'])) ? '<span class="help-block">' .$messages['ages_description'] . '</span>' : '' ?>
                    </div>
                    <button class="btn btn-submit"> Valider </button>
                </form>
            </div>
        </div>
    </div>


<?php $this->stop('main_content'); ?>
