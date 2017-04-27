<?php $this->layout('layout', ['title' => 'Liste des événements']); ?>
<?php $this->start('main_content'); ?>
    <div>
        <a href="<?= $this->url('event_create') ?>" class="btn btn-primary"> Ajouter un événement </a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Titre</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($event as $event) { ?>
            <tr>
                <td><h2><?php echo $event['events_title'] ?> </h2></td>
                <td><h2><?php echo $event['events_description'] ?> </h2></td>
                <td>
                    <a href="<?= $this->url('event_update', ['events_id' => $event['events_id'] ]); ?>" class="btn btn-primary"> Modifier </a>
                    <a href="<?= $this->url('event_delete', ['events_id' => $event['events_id'] ]); ?>" class="btn btn-danger"> Supprimer </a>
                </td>
            </tr>
    <?php } ?>
        </tbody>
   </table>
<?php $this->stop('main_content'); ?>
