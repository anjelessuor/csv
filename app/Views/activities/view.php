<?php $this->layout('layout-back', ['title' => $activities['activities_title']]); ?>
<?php $this->start('main_content'); ?>

    <div class="container text-center">
        <h1><?= $activities['activities_title'] ?></h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?= $this->url('activities_index'); ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a><br/><br/>
                <a href="<?= $this->url('activities_edit', ['id' => $activities['activities_id']]); ?>" class="btn btn-primary display">Modifier</a>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-5">
                        <h2><?php echo $activities['activities_title']; ?></h2>
                        <p>Secteurs concernés par cette activité : </p>

                        <?php if($activities['activities_3to5'] == 1){ ?>
                            <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Secteur Enfance 3 à 5 ans</p>
                        <?php }; ?>
                        <?php if($activities['activities_6to12'] == 1){ ?>
                            <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Secteur Enfance 6 à 12 ans</p>
                        <?php }; ?>
                        <?php if($activities['activities_12to16'] == 1){ ?>
                            <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Secteur Jeunes 12 à 16 ans</p>
                        <?php }; ?>
                        <?php if($activities['activities_16to25'] == 1){ ?>
                            <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Secteur Jeunes 16 à 25 ans</p>
                        <?php }; ?>
                        <?php if ($activities['activities_adults'] == 1){ ?>
                            <p><i class="fa fa-check-square-o" aria-hidden="true"></i> Secteur Adultes et Familles</p>
                        <?php }; ?>
                    </div>
                    <div class="col-lg-7">
                        <p>Description</p>
                        <p><?php echo $activities['activities_description']; ?></p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>




<?php $this->stop('main_content'); ?>
