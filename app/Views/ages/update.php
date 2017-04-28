<?php $this->layout('layout', ['title' => 'Configuration générale' .$ages['ages_name']]); ?>
<?php $this->start('main_content'); ?>

<!-- Lien pour retour sur liste des différentes catégories d'age -->
<a href="<?php echo $this->url('ages_index') ?>">Retour</a>

<form method="POST" action="">
    <div class="form-group">
        <label for="ages_name">Nom de la catégorie d'age :</label>
        <input class="form-control" type="text" name="ages_name" id="ages_name" value="<?php echo $ages['ages_name'] ?>">
    </div>
    <div class="form-group">
        <label for="ages_description">Description :</label>

        <textarea class="form-control" name="ages_description" id="ages_description" value="<?php echo $age['ages_description'] ?>"></textarea>

        <input class="form-control" type="text" name="ages_description" id="ages_description" value="<?php echo $ages['ages_description'] ?>">

    </div>
    <button class="btn btn-submit">Modifier</div>
</form>

<?php $this->stop('main_content'); ?>
