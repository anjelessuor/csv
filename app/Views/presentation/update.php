<?php $this->layout('layout', ['title' => 'Configuration presentation'.$presentation['presentation_name']]); ?>
<?php $this->start('main_content'); ?>

<!-- Lien pour retour sur liste des différentes catégories presentation -->
<a href="<?php echo $this->url('presentation_index') ?>">Retour</a>

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