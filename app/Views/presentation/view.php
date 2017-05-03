<?php $this->layout('layout-back', ['title' => 'Voir la présentation']) ?>

<?php $this->start('main_content') ?>


<div class="container text-center">
    <h1>Voir la présentation globale</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <a href="<?= $this->url('presentation_index'); ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a><br/><br/>
            <a href="<?= $this->url('presentation_update', ['presentation_id' => $presentation['presentation_id']]); ?>" class="btn btn-primary display">Modifier</a>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-5">
                    <p>Description</p>
                    <p><?php echo $presentation['presentation_name']; ?></p>
                    <br>
                </div>
                <div class="col-lg-7">
                    <p>Description</p>
                    <p><?php echo $presentation['presentation_description']; ?></p>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->stop('main_content') ?>
