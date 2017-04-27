<?php $this->layout('layout', ['title' => 'Liste des activités']) ?>

<?php $this->start('main_content'); ?>

    <div>

        <a href="<?= $this->url('school_create') ?>" class="btn btn-success">Ajouter</a>
        <a href="<?= $this->url('school_index') ?>?age=school_3to5" class="btn btn-primary">3-5 ans</a>
        <a href="<?= $this->url('school_index') ?>?age=school_6to12" class="btn btn-primary">6-12 ans</a>
        <a href="<?= $this->url('school_index') ?>?age=school_12to16" class="btn btn-primary">12-16 ans</a>
        <a href="<?= $this->url('school_index') ?>?age=school_16to25" class="btn btn-primary">16-25 ans</a>
        <a href="<?= $this->url('school_index') ?>?age=school_adults" class="btn btn-primary">Adultes</a>
        <a href="<?= $this->url('school_index') ?>" class="btn btn-info">Voir tout</a>
    </div>
    <div>

    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($school as $help) {  ?>
                <tr>

                    <td><?php echo $help['school_id']; ?></td>
                    <td><?php echo $help['school_title']; ?></td>
                    <td><?php echo $help['school_description']; ?></td>
                    <td>
                        <a href="<?= $this->url('school_edit', ['id' => $help['school_id']]); ?>" class="btn btn-primary">Modifier</a>
                        <a href="<?= $this->url('school_delete', ['id' => $help['school_id']]); ?>" class="btn btn-danger">Supprimer</a>
                        <a href="<?= $this->url('school_view', ['id' => $help['school_id']]); ?>" class="btn btn-info">Voir</a>

                    </td>
                </tr>
                <?php }  ?>
        </tbody>
    </table>
<?php $this->stop('main_content'); ?>
