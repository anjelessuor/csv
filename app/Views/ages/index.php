<?php $this->layout('layout-back', ['title' => 'Liste des ages']); ?>
<?php $this->start('main_content'); ?>

    <div class="container text-center">
        <h1>Liste des sections</h1>
    </div>

    <div class="container">
        <a href="<?= $this->url('display_index') ?>" class="btn btn-warning"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="id">ID</th>
                    <th class="title">Secteur</th>
                    <th class="list-content">Description</th>
                    <th class="action">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ages as $age) { ?>
                    <tr>
                        <td><?php echo $age['ages_id'] ?></td>
                        <td><?php echo $age['ages_name'] ?></td>
                        <td><?php echo $age['ages_description'] ?></td>
                        <td>
                            <a href="<?= $this->url('ages_update', ['ages_id' => $age['ages_id'] ]); ?>" class="btn btn-primary"> Modifier </a>
                            <a href="<?= $this->url('ages_view', ['ages_id' => $age['ages_id']]); ?>" class="btn btn-info">Voir</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>


<?php $this->stop('main_content'); ?>
