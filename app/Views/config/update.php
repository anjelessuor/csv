<?php $this->layout('layout', ['title' => 'Configuration générale' .$config['config_sitename']]); ?>
<?php $this->start('main_content'); ?>

    <!-- Retour sur la configuration-->
    <a href="<?php echo $this->url('config_index') ?>">Retour </a>

    <form method="POST" action="">
        <div class="form-group">
            <label for="config_sitename">Nom du site </label>
            <input class="form-control" type="text" name="config_sitename" id="config_sitename" value="<?php echo $config['config_sitename'] ?>">
        </div>
        <div class="form-group">
            <label for="config_address"> Adresse : </label>
            <input class="form-control" name="config_address" id="config_address" value="<?php echo $config['config_address'] ?>">
        </div>
        <div class="form-group">
            <label for="config_phone"> Téléphone : </label>
            <input type="text" class="form-control" name="config_phone" id="config_phone" value="<?php echo $config['config_phone'] ?>">
        </div>
        <div class="form-group">
            <label for="config_email"> Email : </label>
            <input type="text" class="form-control" name="config_email" id="config_email" value="<?php echo $config['config_email'] ?>">
        </div>
        <div class="form-group">
            <label for="config_facebook"> Facebook : </label>
            <input type="url" name="config_facebook" id="config_facebook" value="<?php echo $config['config_facebook'] ?>">
        </div>
        <button class="btn btn-submit">Modifier </div>
    </form>

<?php $this->stop('main_content'); ?>
