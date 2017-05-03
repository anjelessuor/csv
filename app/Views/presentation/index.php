<?php $this->layout('layout-back', ['title' => 'Liste des presentation']); ?>
<?php $this->start('main_content'); ?>

<div class="container text-center">
    <h1>Présentation globale</h1>
</div>

<div class="container">
    <a href="<?= $this->url('display_index') ?>" class="btn btn-warning"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
</div>
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="id">ID</th>
                <th class="title">Titre</th>
                <th class="list-content">Description</th>
                <th class="action">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($presentation as $presentation) { ?>
            <tr>
                <td><?php echo $presentation['presentation_id'] ?></td>
                <td><?php echo $presentation['presentation_name'] ?></td>
                <td><?php echo $presentation['presentation_description'] ?></td>
                <td>
                    <a href="<?= $this->url('presentation_update', ['presentation_id' => $presentation['presentation_id'] ]); ?>" class="btn btn-primary">Modifier</a>
                    <a href="<?= $this->url('presentation_view', ['id' => $presentation['presentation_id']]); ?>" class="btn btn-info">Voir</a>
                </td>
            </tr>
            <?php }  ?>
        </tbody>
    </table>
</div>



<?php $this->stop('main_content'); ?>
