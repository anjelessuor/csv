<?php $this->layout('layout-back', ['title' => 'Liste des activités']) ?>

<?php $this->start('main_content'); ?>

    <div class="container text-center">
        <h1>Liste des accompagnements scolaires</h1>
    </div>

    <div class="container">
        <a href="<?= $this->url('display_index') ?>" class="btn btn-warning"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
        <a href="<?= $this->url('school_create') ?>" class="btn btn-success">Ajouter</a>
        <a href="<?= $this->url('school_index') ?>?age=school_3to5" class="btn btn-primary">3-5 ans</a>
        <a href="<?= $this->url('school_index') ?>?age=school_6to12" class="btn btn-primary">6-12 ans</a>
        <a href="<?= $this->url('school_index') ?>?age=school_12to16" class="btn btn-primary">12-16 ans</a>
        <a href="<?= $this->url('school_index') ?>?age=school_16to25" class="btn btn-primary">16-25 ans</a>
        <a href="<?= $this->url('school_index') ?>?age=school_adults" class="btn btn-primary">Adultes</a>
        <a href="<?= $this->url('school_index') ?>" class="btn btn-info">Voir tout</a>
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="id">ID</th>
                    <th class="title">Activité</th>
                    <th class="list-content">Description</th>
                    <th class="action">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($school as $school) {  ?>
                <tr>
                    <td><?php echo $school['school_id']; ?></td>
                    <td><?php echo $school['school_title']; ?></td>
                    <td><?php echo $school['school_description']; ?></td>
                    <td>
                        <a href="<?= $this->url('school_edit', ['id' => $school['school_id']]); ?>" class="btn btn-primary">Modifier</a>
                        <a href="<?= $this->url('school_delete', ['id' => $school['school_id']]); ?>" class="btn btn-danger">Supprimer</a>
                        <a href="<?= $this->url('school_view', ['id' => $school['school_id']]); ?>" class="btn btn-info">Voir</a>
                    </td>
                </tr>
                <?php }  ?>
            </tbody>
        </table>
    </div>
<?php $this->stop('main_content'); ?>
