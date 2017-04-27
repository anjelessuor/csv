<?php $this->layout('layout', ['title' => 'Liste des activités']) ?>

<?php $this->start('main_content'); ?>

    <div>
        <a href="<?= $this->url('activities_create') ?>" class="btn btn-success">Ajouter une activité</a>
        <a href="<?= $this->url('activities_index') ?>?age=activities_3to5" class="btn btn-primary">3-5 ans</a>
        <a href="<?= $this->url('activities_index') ?>?age=activities_6to12" class="btn btn-primary">6-12 ans</a>
        <a href="<?= $this->url('activities_index') ?>?age=activities_12to16" class="btn btn-primary">12-16 ans</a>
        <a href="<?= $this->url('activities_index') ?>?age=activities_16to25" class="btn btn-primary">16-25 ans</a>
        <a href="<?= $this->url('activities_index') ?>?age=activities_adults" class="btn btn-primary">Adultes</a>
        <a href="<?= $this->url('activities_index') ?>" class="btn btn-info">Voir tout</a>
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
            <?php foreach ($activities as $activitie) {  ?>
                <tr>

                    <td><?php echo $activitie['activities_id']; ?></td>
                    <td><?php echo $activitie['activities_title']; ?></td>
                    <td><?php echo $activitie['activities_description']; ?></td>
                    <td>
                        <a href="<?= $this->url('activities_edit', ['id' => $activitie['activities_id']]); ?>" class="btn btn-primary">Modifier</a>
                        <a href="<?= $this->url('activities_delete', ['id' => $activitie['activities_id']]); ?>" class="btn btn-danger">Supprimer</a>
                        <a href="<?= $this->url('activities_view', ['id' => $activitie['activities_id']]); ?>" class="btn btn-info">Voir l'activité</a>
                    </td>
                </tr>
                <?php }  ?>
        </tbody>
    </table>
<?php $this->stop('main_content'); ?>
