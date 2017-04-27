<?php $this->layout('layout', ['title' => 'Modifier un fichier à télécharger' .$documents['documents_name']]); ?>
<?php $this->start('main_content'); ?>

    <!-- Lien pour retour sur liste -->
    <a href="<?php echo $this->url('documents_index') ?>">Retour à la liste des téléchargements</a>

    <form method="POST" action="">
        <div class="form-group">
            <label for="documents_name">Nom : </label>
            <input class="form-control" type="text" name="documents_name" id="documents_name" value="<?php echo $documents['documents_name']?>">
        </div>
        <div class="form-group">
            <label for="documents_description">Description : </label>
            <textarea class="form-control" name="documents_description" id="documents_description" value="<?php echo $documents['documents_description']?>"></textarea>
        </div>
        <div class="form-group">
            <label for="documents_document"> Lien du document : </label>
            <input type="url" name="documents_document" id="documents_document">
        </div>
        <button class="btn btn-submit">Modifier : </div>
    </form>

<?php $this->stop('main_content'); ?>
