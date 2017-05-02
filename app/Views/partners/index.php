<?php $this->layout('layout-back', ['title' => 'Liste des partenaires']); ?>
<?php $this->start('main_content'); ?>

    <div class="container text-center">
        <h1>Liste des partenaires</h1>
    </div>

    <div class="container">
        <a href="<?= $this->url('display_index') ?>" class="btn btn-warning"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
        <a href="<?= $this->url('partners_create') ?>" class="btn btn-success">Ajouter</a>
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="id">Nom</th>
                    <th class="title">Logo</th>
                    <th class="list-content">Description</th>
                    <th class="action">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($partners as $partners) { ?>
                <tr>
                    <td><?php echo $partners['partners_name'] ?> </td>
                    <td><img class="partners_logo" src="../uploads/partners/<?php echo $partners['partners_image'] ?>" alt=""></td>
                    <td><?php echo $partners['partners_description'] ?> </td>
                    <td>
                        <a href="<?= $this->url('partners_update', ['partners_id' => $partners['partners_id'] ]); ?>" class="btn btn-primary"> Modifier </a>
                        <a href="<?= $this->url('partners_delete', ['partners_id' => $partners['partners_id'] ]); ?>" class="btn btn-danger"> Supprimer </a>
                        <a href="<?= $this->url('partners_view', ['id' => $partners['partners_id']]); ?>" class="btn btn-info">Voir</a>
                    </td>
                </tr>
                <?php }  ?>
            </tbody>
        </table>
    </div>

<?php $this->stop('main_content'); ?>
