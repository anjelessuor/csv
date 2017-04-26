<?php $this->layout('layout', ['title' => 'Liste des activités']) ?>

<?php $this->start('main_content'); ?>

    <div><a href="<?= $this->url('activities_create') ?>" class="btn btn-primary">Ajouter un article</a></div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Lieu</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($activities as $activitie) {  ?>
                <tr>
                    <td><?php echo $activitie['activities_id']; ?></td>
                    <td><?php echo $activitie['activities_title']; ?></td>
                    <td><?php echo $activitie['activities_description']; ?></td>
                    <td><?php echo $activitie['activities_localization']; ?></td>
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
