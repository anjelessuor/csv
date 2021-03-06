<?php $this->layout('layout-back', ['title' => $activities['activities_title']]); ?>
<?php $this->start('main_content'); ?>

    <div class="container text-center">
        <h1><?= $config['config_sitename'] ?></h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?= $this->url('config_index'); ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a><br/><br/>
                <a href="<?= $this->url('config_update', ['config_id' => $config['config_id']]); ?>" class="btn btn-primary display">Modifier</a>
            </div>
            <div class="col-lg-8">

                <p><?php echo $config['config_sitename'] ?> </p>
                <p><?php echo $config['config_address'] ?> </p>
                <p><?php echo $config['config_phone'] ?> </p>
                <p><?php echo $config['config_email'] ?></p>
            </div>
        </div>
    </div>

<?php $this->stop('main_content') ?>
