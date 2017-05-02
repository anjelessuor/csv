<?php $this->layout('layout-back', ['title' => 'Modifier un fichier à télécharger' .$documents['documents_name']]); ?>
<?php $this->start('main_content'); ?>

<!--Startlayout-->
<br>
<div class="container">
    <div class="row">
        <div class="col-xs-11">
            <div>
            <!--END of Startlayout-->


<!--Return-Button-block  -->
<div class="container">
    <div class="row">
        <a href="<?php echo $this->url('documents_index') ?>" class="btn btn-success btn-block">Retour</a>
    </div>    
</div>
<br>
<!--END of Return-Button-block  -->

    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="documents_name">Nom : </label>
            <input class="form-control" type="text" name="documents_name" id="documents_name" value="<?php echo $documents['documents_name']?>">
        </div>
        <div class="form-group">
            <label for="documents_description">Description : </label>
            <textarea class="form-control" name="documents_description" id="documents_description" value="<?php echo $documents['documents_description']?>"></textarea>
        </div>
        <div class="form-group">
            <label for="documents_document"> Fichier : </label>
            <input type="file" name="documents_document" id="documents_document">
        </div>
        <button class="btn btn-submit">Modifier</div>
    </form>
    <br>
   

<?php $this->stop('main_content'); ?>
