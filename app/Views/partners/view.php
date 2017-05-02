<?php $this->layout('layout-back', ['title' => 'Accueil']) ?>
<?php $this->start('main_content') ?>


    <div class="container text-center">
        <h1><?= $partners['partners_name'] ?></h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?= $this->url('partners_index'); ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a><br/><br/>
                <a href="<?= $this->url('partners_update', ['id' => $partners['partners_id']]); ?>" class="btn btn-primary display">Modifier</a>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-5">
                        <h2><?php echo $partners['partners_name']; ?></h2>
                        <p>Logo </p>
                        <img class="partners_logo" src="../uploads/partners/<?php echo $partners['partners_image'] ?>" alt="">
                    </div>
                    <div class="col-lg-7">
                        <p>Description</p>
                        <p><?php echo $partners['partners_description']; ?></p>
                        <br>
                        <p>Lien</p>
                        <a href="<?php echo $partners['partners_link']; ?>"><?php echo $partners['partners_link']; ?></a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->stop('main_content') ?>
