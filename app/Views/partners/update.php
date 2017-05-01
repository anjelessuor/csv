<?php $this->layout('layout-back', ['title' => 'Modifier un partnaire' .$partners['partners_name']]); ?>

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
        <a href="<?php echo $this->url('partners_index') ?>" class="btn btn-warning">Retour</a>
    </div>    
</div>
<br>
<!--END of Return-Button-block  -->

    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="partners_name">Nom : </label>
            <input class="form-control" type="text" name="partners_name" id="partners_name" value="<?php echo $partners['partners_name']?>">
        </div>
        <div class="form-group">
            <label for="partners_description">Description : </label>
            <textarea class="form-control" name="partners_description" id="partners_description" value="<?php echo $partners['partners_description']?>"> </textarea>
        </div>
        <div class="form-group">
            <label for="partners_image"> Logo/image : </label>
            <input type="file" name="partners_image" id="partners_image">
        </div>
        <div class="form-group">
            <label for="partners_link">Link : </label>
            <textarea class="form-control" name="partners_link" id="partners_link" value="<?php echo $partners['partners_link']?>"> </textarea>
        </div>
        <button class="btn btn-submit">Modifier </div>
    </form>
    </div>
        <div class="col-xs-2"></div>
        </div>
</div>


<?php $this->stop('main_content'); ?>
