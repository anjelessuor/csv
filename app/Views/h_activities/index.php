<?php $this->layout('layout', ['title' => 'Liste des activités']) ?>

<?php $this->start('main_content'); ?>

    <div><a href="<?= $this->url('h_activities_create') ?>" class="btn btn-primary">Ajouter une activité</a></div>

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
            <?php foreach ($h_activities as $h_activitie) {  ?>
                <tr>
                    <td><?php echo $h_activitie['h_activities_id']; ?></td>
                    <td><?php echo $h_activitie['h_activities_title']; ?></td>
                    <td><?php echo $h_activitie['h_activities_description']; ?></td>
                    <td><?php echo $h_activitie['h_activities_localization']; ?></td>
                    <td>
                        <a href="<?= $this->url('h_activities_edit', ['id' => $h_activitie['h_activities_id']]); ?>" class="btn btn-primary">Modifier</a>
                        <a href="<?= $this->url('h_activities_delete', ['id' => $h_activitie['h_activities_id']]); ?>" class="btn btn-danger">Supprimer</a>
                        <a href="<?= $this->url('h_activities_view', ['id' => $h_activitie['h_activities_id']]); ?>" class="btn btn-info">Voir l'activité</a>
                    </td>
                </tr>
                <?php }  ?>
        </tbody>
    </table>
<?php $this->stop('main_content'); ?>
