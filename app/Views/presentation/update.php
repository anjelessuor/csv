<?php $this->layout('layout-back', ['title' => 'Configuration presentation'.$presentation['presentation_name']]); ?>
<?php $this->start('main_content'); ?>

<br>
<div class="container">
    <div class="row">
        <div class="col-xs-11">
            <div>

<!--Return-Button-block  -->
<div class="container">
    <div class="row">
        <a href="<?php echo $this->url('presentation_index') ?>" class="btn btn-warning">Retour</a>
    </div>    
</div>
<br>
<!--END of Return-Button-block  -->


<form method="POST" action="">
    <div class="form-group">
        <label for="presentation_name">Nom de Présentation :</label>
        <input class="form-control" type="text" name="presentation_name" id="presentation_name" value="<?php echo $presentation['presentation_name'] ?>">
    </div>
    <div class="form-group">
        <label for="presentation_description">Description :</label>
        <input class="form-control" type="text" name="presentation_description" id="presentation_description" value="<?php echo $presentation['presentation_description'] ?>">
    </div>
    <button class="btn btn-submit">Modifier</div>
</form>

<?php $this->stop('main_content'); ?>