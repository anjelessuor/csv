<?php $this->layout('layout-back', ['title' => 'Liste des activités']) ?>

<?php $this->start('main_content'); ?>


    <div class="container text-center">
        <h1>Liste des activités vacances</h1>
    </div>

    <div class="container">
        <a href="<?= $this->url('display_index') ?>" class="btn btn-warning"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
        <a href="<?= $this->url('h_activities_create') ?>" class="btn btn-success">Ajouter</a>
        <a href="<?= $this->url('h_activities_index') ?>?age=h_activities_3to5" class="btn btn-primary">3-5 ans</a>
        <a href="<?= $this->url('h_activities_index') ?>?age=h_activities_6to12" class="btn btn-primary">6-12 ans</a>
        <a href="<?= $this->url('h_activities_index') ?>?age=h_activities_12to16" class="btn btn-primary">12-16 ans</a>
        <a href="<?= $this->url('h_activities_index') ?>?age=h_activities_16to25" class="btn btn-primary">16-25 ans</a>
        <a href="<?= $this->url('h_activities_index') ?>?age=h_activities_adults" class="btn btn-primary">Adultes</a>
        <a href="<?= $this->url('h_activities_index') ?>" class="btn btn-info">Voir tout</a>
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
                <?php foreach ($h_activities as $activitie) {  ?>
                <tr>
                    <td><?php echo $activitie['h_activities_id']; ?></td>
                    <td><?php echo $activitie['h_activities_title']; ?></td>
                    <td><?php echo $activitie['h_activities_description']; ?></td>
                    <td>
                        <a href="<?= $this->url('h_activities_edit', ['id' => $activitie['h_activities_id']]); ?>" class="btn btn-primary">Modifier</a>
                        <a href="<?= $this->url('h_activities_delete', ['id' => $activitie['h_activities_id']]); ?>" class="btn btn-danger">Supprimer</a>
                        <a href="<?= $this->url('h_activities_view', ['id' => $activitie['h_activities_id']]); ?>" class="btn btn-info">Voir</a>
                    </td>
                </tr>
                <?php }  ?>
            </tbody>
        </table>
    </div>
<?php $this->stop('main_content'); ?>
