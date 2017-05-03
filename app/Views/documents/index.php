<?php $this->layout('layout-back', ['title' => 'Liste des pièces disponibles au téléchargement']); ?>
<?php $this->start('main_content'); ?>

<div class="container text-center">
    <h1>Liste des pièces disponibles au téléchargement</h1>
</div>

<div class="container">
    <a href="<?= $this->url('display_index') ?>" class="btn btn-warning"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
    <a href="<?= $this->url('documents_create') ?>" class="btn btn-success">Ajouter</a>
</div>
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="title">Nom</th>
                <th class="list-content">Description</th>
                <th class="list-content">Lien</th>
                <th class="action">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($documents as $documents) { ?>
            <tr>
                <td><?php echo $documents['documents_name'] ?> </td>
                <td><?php echo $documents['documents_description'] ?> </td>
                <td><a href="../uploads/documents/<?php echo $documents["documents_document"] ?>" target="_blank"><?php echo $documents['documents_document'] ?></a></td>
                <td>
                    <a href="<?= $this->url('documents_update', ['documents_id' => $documents['documents_id'] ]); ?>" class="btn btn-primary"> Modifier </a>
                    <a href="<?= $this->url('documents_delete', ['documents_id' => $documents['documents_id'] ]); ?>" class="btn btn-danger"> Supprimer </a>
                    <a href="<?= $this->url('documents_view', ['documents_id' => $documents['documents_id']]); ?>" class="btn btn-info">Voir</a>
                </td>
            </tr>
            <?php }  ?>
        </tbody>
    </table>
</div>


<?php $this->stop('main_content'); ?>
