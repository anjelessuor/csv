<?php $this->layout('layout', ['title' => 'Modifier un partnaire' .$partners['partners_name']]); ?>
<?php $this->start('main_content'); ?>

    <!-- Lien pour retour sur liste event -->
    <a href="<?php echo $this->url('partners_index') ?>">Retour à la liste des partenaires</a>

    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="partners_name">Nom : </label>
            <input class="form-control" type="text" name="partners_name" id="partners_name" value="<?php echo $partners['partners_name']?>">
        </div>
        <div class="form-group">
            <label for="partners_description">Description : </label>
            <textarea class="form-control" name="partners_description" id="partners_description" value="<?php echo $partners['partners_description']?>">></textarea>
        </div>
        <div class="form-group">
            <label for="partners_image"> Logo/image : </label>
            <input type="file" name="partners_image" id="partners_image">
        </div>
        <button class="btn btn-submit">Modifier : </div>
    </form>

<?php $this->stop('main_content'); ?>
