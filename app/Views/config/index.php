<?php $this->layout('layout-back', ['title' => 'Configuration générale']); ?>
<?php $this->start('main_content'); ?>

    <div class="container text-center">
        <h1>Configuration générale</h1>
    </div>

    <div class="container">
        <a href="<?= $this->url('display_index') ?>" class="btn btn-warning"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="title">Nom du site</th>
                    <th class="list-content">Adresse</th>
                    <th class="title">Téléphone</th>
                    <th class="title">Email</th>
                    <th class="action">Actions</th>
                </tr>
            </thead>
            <tbody>

            <?php foreach ($config as $config) { ?>
            <tr>
                <td><?php echo $config['config_sitename'] ?></td>
                <td><?php echo $config['config_address'] ?></td>
                <td><?php echo $config['config_phone'] ?></td>
                <td><?php echo $config['config_email'] ?></td>
                <td>
                    <a href="<?= $this->url('config_update', ['config_id' => $config['config_id'] ]); ?>" class="btn btn-primary"> Modifier</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
    </div>



<?php $this->stop('main_content'); ?>
