<?php $this->layout('layout', ['title' => 'Configuration presentation']); ?>
<?php $this->start('main_content'); ?>

<!-- Lien pour retour sur liste des différentes catégories d'age -->
<a href="<?php echo $this->url('presentation_index') ?>">Retour à la liste des différentes catégories de presentation</a>

<form action="" method="POST">
    <div class="form-group">
        <label for="presentation_name">Nom de la catégorie d'age :</label>
        <h2><?php echo $presentation['presentation_name'] ?></h2>
    </div>
    <div class="form-group">
        <label for="presentation_description">Description :</label>
        <textarea class="form-control" name="presentation_description" id="presentation_description"></textarea>
    </div>
    <button class="btn btn-submit">Modifier : </div>
</form>

<?php $this->stop('main_content'); ?>
