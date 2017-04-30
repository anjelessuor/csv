<?php $this->layout('layout-back', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
    <article>
        <p><?php echo $partners['partners_name'] ?></p>
        <p><?php echo $partners['partners_description'] ?></p>
    </article>

<?php $this->stop('main_content') ?>
