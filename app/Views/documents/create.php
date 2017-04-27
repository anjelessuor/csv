<?php $this->layout('layout', ['title' => 'Ajouter un fichier au téléchargement']); ?>
<?php $this->start('main_content'); ?>

    <form method="POST" action="">
        <div class="form-group">
            <label for="documents_name">Nom : </label>
            <input class="form-control" type="text" name="documents_name" id="documents_name">
        </div>
        <div class="form-group">
            <label for="documents_description"> Description : </label>
            <textarea class="form-control" name="documents_description" id="documents_description"></textarea>
        </div>
       <div class="form-group">
            <label for="documents_document"> File : </label>
            <input type="file" name="documents_document" id="documents_document">
        </div>

        <button class="btn btn-submit">Publier : </button>
    </form>
    <a href="<?php echo $this->url('documents_index') ?>">Retour à la liste des documents</a>
<?php $this->stop('main_content'); ?>
