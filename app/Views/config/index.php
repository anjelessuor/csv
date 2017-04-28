<?php $this->layout('layout', ['title' => 'Configuration générale']); ?>
<?php $this->start('main_content'); ?>

<a href="<?= $this->url('display_index') ?>" class="btn btn-primary">Retour</a><br/><br/>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom du site</th>
                <th>Adresse</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Facebook</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach ($config as $config) { ?>
        <tr>
            <td>
                <h2>
                    <?php echo $config['config_sitename'] ?> </h2>
            </td>
            <td>
                <h2>
                    <?php echo $config['config_address'] ?> </h2>
            </td>
            <td>
                <h2>
                    <?php echo $config['config_phone'] ?> </h2>
            </td>
            <td>
                <h2>
                    <?php echo $config['config_email'] ?> </h2>
            </td>
            <td>
                <h2>
                    <?php echo $config['config_facebook'] ?> </h2>
            </td>
            <td>
                <a href="<?= $this->url('config_update', ['config_id' => $config['config_id'] ]); ?>" class="btn btn-primary"> Modifier</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<?php $this->stop('main_content'); ?>