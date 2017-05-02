<?php $this->layout('layout-back', ['title' => 'Configuration générale' .$ages['ages_name']]); ?>
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
        <a href="<?php echo $this->url('ages_index') ?>" class="btn btn-warning">Retour</a>
    </div>    
</div>
<br>
<!--END of Return-Button-block  -->


<form method="POST" action="">
    <div class="form-group">
        <label for="ages_name">Nom de la catégorie d'age :</label>
        <input class="form-control" type="text" name="ages_name" id="ages_name" value="<?php echo $ages['ages_name'] ?>">
    </div>

    <div class="form-group">
        <label for="ages_description">Description :</label>
        <input class="form-control" type="text" name="ages_description" id="ages_description" value="<?php echo $ages['ages_description'] ?>">
    </div>
    <button class="btn btn-submit">Modifier</div>
</form>

<?php $this->stop('main_content'); ?>
