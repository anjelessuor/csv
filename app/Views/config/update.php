<?php $this->layout('layout-back', ['title' => 'Configuration générale' .$config['config_sitename']]); ?>
<?php $this->start('main_content'); ?>

    <div class="container text-center">
        <h1>Mettre à jour la configuration générale</h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?php echo $this->url('config_index') ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
            </div>
            <div class="col-lg-8">
                <form method="POST" action="">
                    <div class="form-group">
                        <label for="config_sitename">Nom du site </label>
                        <input class="form-control" type="text" name="config_sitename" id="config_sitename" value="<?php echo $config['config_sitename'] ?>">
                        <?= (isset($messages['config_sitename'])) ? '<span class="help-block">' .$messages['config_sitename'] . '</span>' : '' ?>
                    </div>
                    <div class="form-group">
                        <label for="config_address"> Adresse : </label>
                        <input class="form-control" name="config_address" id="config_address" value="<?php echo $config['config_address'] ?>">
                        <?= (isset($messages['config_address'])) ? '<span class="help-block">' .$messages['config_address'] . '</span>' : '' ?>
                    </div>
                    <div class="form-group">
                        <label for="config_phone"> Téléphone : </label>
                        <input type="text" class="form-control" name="config_phone" id="config_phone" value="<?php echo $config['config_phone'] ?>">
                        <?= (isset($messages['config_phone'])) ? '<span class="help-block">' .$messages['config_phone'] . '</span>' : '' ?>
                    </div>
                    <div class="form-group">
                        <label for="config_email"> Email : </label>
                        <input type="text" class="form-control" name="config_email" id="config_email" value="<?php echo $config['config_email'] ?>">
                        <?= (isset($messages['config_email'])) ? '<span class="help-block">' .$messages['config_email'] . '</span>' : '' ?>
                    </div>
                    <button class="btn btn-submit">Modifier </div>
                </form>
            </div>
        </div>
    </div>




<?php $this->stop('main_content'); ?>
