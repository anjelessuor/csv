<?php $this->layout('layout-back', ['title' => 'Configuration presentation'.$presentation['presentation_name']]); ?>
<?php $this->start('main_content'); ?>


<div class="container text-center">
    <h1>Mettre à jour la présentation globale</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <a href="<?php echo $this->url('presentation_index') ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
        </div>
        <div class="col-lg-8">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="presentation_name">Titre :</label>
                    <input class="form-control" type="text" name="presentation_name" id="presentation_name" value="<?php echo $presentation['presentation_name'] ?>">
                    <?= (isset($messages['presentation_name'])) ? '<span class="help-block">' .$messages['presentation_name'] . '</span>' : '' ?>
                </div>
                <div class="form-group">
                    <label for="presentation_description">Description :</label>
                    <textarea class="form-control" type="text" name="presentation_description" id="presentation_description"><?php echo $presentation['presentation_description'] ?></textarea>
                    <?= (isset($messages['presentation_description'])) ? '<span class="help-block">' .$messages['presentation_description'] . '</span>' : '' ?>
                </div>
                <button class="btn btn-submit">Valider</div>
            </form>
        </div>
    </div>
</div>

<?php $this->stop('main_content'); ?>
