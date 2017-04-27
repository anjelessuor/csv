<?php $this->layout('layout', ['title' => 'Ajout d\'un partenaire']); ?>
<?php $this->start('main_content'); ?>

    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="partners_name">Nom : </label>
            <input class="form-control" type="text" name="partners_name" id="partners_name">
        </div>
        <div class="form-group">
            <label for="partners_description">Description : </label>
            <textarea class="form-control" name="partners_description" id="partners_description"></textarea>
        </div>
        <div class="form-group">
            <label for="partners_link">Lien : </label>
            <input type="url" class="form-control" name="partners_link" id="partners_link">
        </div>
        <div class="form-group">
            <label for="partners_image"> Logo/image : </label>
            <input type="file" name="partners_image" id="partners_image">
        </div>
        <button class="btn btn-submit">Publier : </button>
    </form>
<?php $this->stop('main_content'); ?>
