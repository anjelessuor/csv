<?php $this->layout('layout', ['title' => 'Liste des événements']); ?>
<?php $this->start('main_content'); ?>
    <div>
        <a href="<?= $this->url('evenement_create') ?>" class="btn btn-primary"> Ajouter un événement </a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($events as $event) { ?>
            <tr>
                <td><h2><?php echo $event['events_id'] ?> </h2></td>
                <td><h2><?php echo $event['events_title'] ?> </h2></td>
                <td><h2><?php echo $event['events_description'] ?> </h2></td>
                <td>
                    <a href="<?= $this->url('evenement_update', ['id' => $event['events_id'] ]); ?>" class="btn btn-primary"> Modifier </a>
                    <a href="<?= $this->url('evenement_delete', ['id' => $event['events_id'] ]); ?>" class="btn btn-danger"> Supprimer </a>
                </td>
            </tr>
    <?php } ?>
        </tbody>
   </table>
<?php $this->stop('main_content'); ?>
