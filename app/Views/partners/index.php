<?php $this->layout('layout', ['title' => 'Liste des partenaires']); ?>
<?php $this->start('main_content'); ?>
    <div>
        <a href="<?= $this->url('partners_create') ?>" class="btn btn-primary"> Ajouter un partenaire </a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Logo</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($partners as $partners) { ?>
            <tr>
                <td><h2><?php echo $partners['partners_name'] ?> </h2></td>
                <td><h2><?php echo $partners['partners_description'] ?> </h2></td>
                <td><h2><?php echo $partners['partners_image'] ?> </h2></td>
                <td>
                    <a href="<?= $this->url('partners_update', ['partners_id' => $partners['partners_id'] ]); ?>" class="btn btn-primary"> Modifier </a>
                    <a href="<?= $this->url('partners_delete', ['partners_id' => $partners['partners_id'] ]); ?>" class="btn btn-danger"> Supprimer </a>
                </td>
            </tr>
    <?php } ?>
        </tbody>
   </table>
<?php $this->stop('main_content'); ?>