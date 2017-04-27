<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
    <article>
        <p><?php echo $config['config_sitename'] ?></p>
        <p><?php echo $config['config_sitename'] ?> </p>
        <p><?php echo $config['config_address'] ?> </p>
        <p><?php echo $config['config_phone'] ?> </p>
        <p><?php echo $config['config_email'] ?> </p>
        <p><?php echo $config['config_facebook'] ?> </p>
    </article>

<?php $this->stop('main_content') ?>
