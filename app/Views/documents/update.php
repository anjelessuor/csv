<?php $this->layout('layout-back', ['title' => 'Modifier un fichier à télécharger' .$documents['documents_name']]); ?>
<?php $this->start('main_content'); ?>

<div class="container text-center">
    <h1>Mettre à jour le document <?= $documents['documents_name'] ?></h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <a href="<?php echo $this->url('documents_index') ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
        </div>
        <div class="col-lg-8">
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="documents_name">Nom : </label>
                    <input class="form-control" type="text" name="documents_name" id="documents_name" value="<?php echo $documents['documents_name']?>">
                    <?= (isset($messages['documents_name'])) ? '<span class="help-block">' .$messages['documents_name'] . '</span>' : '' ?>
                </div>
                <div class="form-group">
                    <label for="documents_description">Description : </label>
                    <textarea class="form-control" name="documents_description" id="documents_description" value="<?php echo $documents['documents_description']?>"></textarea>
                    <?= (isset($messages['documents_description'])) ? '<span class="help-block">' .$messages['documents_description'] . '</span>' : '' ?>
                </div>
                <div class="form-group">
                    <label for="documents_document"> Fichier : </label>
                    <input type="file" name="documents_document" id="documents_document">
                    <?= (isset($messages['documents_size'])) ? '<span class="help-block">' .$messages['documents_size'] . '</span>' : '' ?>
                    <?= (isset($messages['documents_type'])) ? '<span class="help-block">' .$messages['documents_type'] . '</span>' : '' ?>
                    <?= (isset($messages['documents_load'])) ? '<span class="help-block">' .$messages['documents_load'] . '</span>' : '' ?>
                </div>
                <button class="btn btn-submit">Modifier : </div>
            </form>
        </div>
    </div>
</div>



<?php $this->stop('main_content'); ?>
