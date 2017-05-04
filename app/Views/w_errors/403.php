<?php $this->layout('layout-error', ['title' => 'Nothing to see here']) ?>

<?php $this->start('main_content'); ?>
<div class="row col-md-12 backerror">
    <div class="text-center">
        <h1>403. Perdu ?</h1>
        <a href="<?= $this->url('default_home') ?>" class="btn btn-danger"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
    </div>
</div>

<?php $this->stop('main_content'); ?>
