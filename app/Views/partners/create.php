<?php $this->layout('layout-back', ['title' => 'Ajout d\'un partenaire']); ?>

<?php $this->start('main_content'); ?>

<!--Startlayout-->
<br>
<div class="container">
    <div class="row">
        <div class="col-xs-11">
            <div>
            <!--END of Startlayout-->

<!--Return Button-->
            <a href="<?php echo $this->url('partners_index') ?>" class="btn btn-warning">Retour</a><br>
<!--Return Button-->
<br>
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
            
    </div>
<?php $this->stop('main_content'); ?>
