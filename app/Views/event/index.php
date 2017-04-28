<?php $this->layout('layout', ['title' => 'Liste des événements']); ?>
<?php $this->start('main_content'); ?>
    <div>
        <a href="<?= $this->url('display_index') ?>" class="btn btn-warning">Retour</a>
        <a href="<?= $this->url('event_create') ?>" class="btn btn-success">Ajouter un événement </a>
        <a href="<?= $this->url('event_index') ?>?age=events_3to5" class="btn btn-primary">3-5 ans</a>
        <a href="<?= $this->url('event_index') ?>?age=events_6to12" class="btn btn-primary">6-12 ans</a>
        <a href="<?= $this->url('event_index') ?>?age=events_12to16" class="btn btn-primary">12-16 ans</a>
        <a href="<?= $this->url('event_index') ?>?age=events_16to25" class="btn btn-primary">16-25 ans</a>
        <a href="<?= $this->url('event_index') ?>?age=events_adults" class="btn btn-primary">Adultes</a>
        <a href="<?= $this->url('event_index') ?>" class="btn btn-info">Voir tout</a>

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
                <td><?php echo $event['events_title'] ?></td>
                <td><?php echo $event['events_description'] ?></td>
                <td>
                    <a href="<?= $this->url('event_update', ['events_id' => $event['events_id'] ]); ?>" class="btn btn-primary">Modifier</a>
                    <a href="<?= $this->url('event_delete', ['events_id' => $event['events_id'] ]); ?>" class="btn btn-danger">Supprimer</a>
                    <a href="<?= $this->url('event_view', ['events_id' => $event['events_id']]); ?>" class="btn btn-info">Voir</a>
                </td>
            </tr>
    <?php } ?>
        </tbody>
   </table>
<?php $this->stop('main_content'); ?>
