<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
<article>
    <p>
        <?php echo $presentation['description'] ?>
    </p>
</article>

<?php $this->stop('main_content') ?>