<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
    <article>
        <p><?php echo $partners['partners_name'] ?></p>
        <p><?php echo $partners_description = $_POST['partners_description'] ?></p>
        <p><?php echo $partners_link = $_POST['partners_link'] ?></p>
        <p><?php echo $partners_image = $_FILES["partners_image"]["name"] ?></p>
    </article>

<?php $this->stop('main_content') ?>
