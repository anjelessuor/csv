<?php $this->layout('layout-back', ['title' => 'Liste des pièces disponibles au téléchargement']); ?>
<?php $this->start('main_content'); ?>

<div class="container">
    <div class="row">
        <div class="col-xs-11">
            <div>
        <a href="<?= $this->url('documents_create') ?>" class="btn btn-primary btn-block"> Ajouter un fichier </a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Description</th>
                <th>Lien</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($documents as $documents) { ?>
            <tr>
                <td><h2><?php echo $documents['documents_name'] ?> </h2></td>
                <td><h2><?php echo $documents['documents_description'] ?> </h2></td>
                <td><h2><?php echo $documents['documents_document'] ?> </h2></td>
                <td>
                    <a href="<?= $this->url('documents_update', ['documents_id' => $documents['documents_id'] ]); ?>" class="btn btn-primary"> Modifier </a>
                    <a href="<?= $this->url('documents_delete', ['documents_id' => $documents['documents_id'] ]); ?>" class="btn btn-danger"> Supprimer </a>

                </td>
            </tr>
    <?php } ?>
        </tbody>
   </table>
   <!-- Lien pour retour  -->
<div class="container">
    <div class="row">
    <a href="<?php echo $this->url('display_index') ?>" class="btn btn-success btn-block">Retour</a>
    </div>    
</div>
<?php $this->stop('main_content'); ?>
