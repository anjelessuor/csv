<?php $this->layout('layout', ['title' => 'Configuration générale']); ?>
<?php $this->start('main_content'); ?>

<!-- Lien pour retour sur liste des différentes catégories d'age -->
<a href="<?php echo $this->url('ages_index') ?>">Retour à la liste des différentes catégories d'age</a>

<form action="" method="POST">
    <div class="form-group">
        <label for="ages_name">Nom de la catégorie d'age :</label>
        <h2><?php echo $age['ages_name'] ?></h2>
    </div>
    <div class="form-group">
        <label for="ages_description">Description :</label>
        <textarea class="form-control" name="ages_description" id="ages_description" value="<?php echo $age['ages_description'] ?>"></textarea>
    </div>
    <button class="btn btn-submit">Modifier : </div>
</form>

<?php $this->stop('main_content'); ?>
