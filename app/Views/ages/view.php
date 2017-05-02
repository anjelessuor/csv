<?php $this->layout('layout-back', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

<div class="container text-center">
    <h1><?= $ages['ages_name'] ?></h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <a href="<?= $this->url('ages_index'); ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a><br/><br/>
            <a href="<?= $this->url('ages_update', ['ages_id' => $ages['ages_id']]); ?>" class="btn btn-primary display">Modifier</a>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-5">
                    <h2><?php echo $ages['ages_name']; ?></h2>
                </div>
                <div class="col-lg-7">
                    <p>Description</p>
                    <p><?php echo $ages['ages_description']; ?></p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $this->stop('main_content') ?>
