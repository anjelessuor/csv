<?php $this->layout('layout-back', ['title' => 'Ajout d\'un partenaire']); ?>

<?php $this->start('main_content'); ?>

    <div class="container text-center">
        <h1>Créer un partenaire</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?= $this->url('partners_index'); ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
            </div>
            <div class="col-lg-8">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="partners_name">Nom : </label>
                        <input class="form-control" type="text" name="partners_name" id="partners_name">
                        <?= (isset($messages['partners_name'])) ? '<span class="help-block">' .$messages['partners_name'] . '</span>' : '' ?>
                    </div>
                    <div class="form-group">
                        <label for="partners_description">Description : </label>
                        <textarea class="form-control" name="partners_description" id="partners_description"></textarea>
                        <?= (isset($messages['partners_description'])) ? '<span class="help-block">' .$messages['partners_description'] . '</span>' : '' ?>
                    </div>
                    <div class="form-group">
                        <label for="partners_link">Lien : </label>
                        <input type="url" class="form-control" name="partners_link" id="partners_link">
                        <?= (isset($messages['partners_link'])) ? '<span class="help-block">' .$messages['partners_link'] . '</span>' : '' ?>
                    </div>
                    <div class="form-group">
                        <label for="partners_image"> Logo/image : </label>
                        <input type="file" name="partners_image" id="partners_image">
                        <?= (isset($messages['partners_size'])) ? '<span class="help-block">' .$messages['partners_size'] . '</span>' : '' ?>
                        <?= (isset($messages['partners_type'])) ? '<span class="help-block">' .$messages['partners_type'] . '</span>' : '' ?>
                        <?= (isset($messages['partners_load'])) ? '<span class="help-block">' .$messages['partners_load'] . '</span>' : '' ?>
                    </div>
                    <button class="btn btn-submit"> Valider </button>
                </form>
            </div>
        </div>
    </div>

<?php $this->stop('main_content'); ?>
