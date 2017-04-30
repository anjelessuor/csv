<?php $this->layout('layout-back', ['title' => 'Ajouter un fichier au téléchargement']); ?>
<?php $this->start('main_content'); ?>

<!--Bootstrap for Form-->
<div class="container">
    <div class="row">
        <div class="col-xs-2"></div>
            <div class="col-xs-8">



    <form method="POST" action="" enctype="multipart/form-data">
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
<br>
    
<!--Return Button-->
            <a href="<?php echo $this->url('documents_index') ?>" class="btn btn-success btn-block">Retour à la liste des documents</a>
<!--Return Button-->
<?php $this->stop('main_content'); ?>