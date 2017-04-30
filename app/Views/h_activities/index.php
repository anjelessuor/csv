<?php $this->layout('layout-back', ['title' => 'Liste des activités']) ?>

<?php $this->start('main_content'); ?>

<br>
<div class="container">
    <div class="row">
        <div class="col-xs-11">
            <div>
    <div>
        <a href="<?= $this->url('display_index') ?>" class="btn btn-warning">Retour</a>
        <a href="<?= $this->url('h_activities_create') ?>" class="btn btn-success">Ajouter une activité</a>
        <a href="<?= $this->url('h_activities_index') ?>?age=h_activities_3to5" class="btn btn-primary">3-5 ans</a>
        <a href="<?= $this->url('h_activities_index') ?>?age=h_activities_6to12" class="btn btn-primary">6-12 ans</a>
        <a href="<?= $this->url('h_activities_index') ?>?age=h_activities_12to16" class="btn btn-primary">12-16 ans</a>
        <a href="<?= $this->url('h_activities_index') ?>?age=h_activities_16to25" class="btn btn-primary">16-25 ans</a>
        <a href="<?= $this->url('h_activities_index') ?>?age=h_activities_adults" class="btn btn-primary">Adultes</a>
        <a href="<?= $this->url('h_activities_index') ?>" class="btn btn-info">Voir tout</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($h_activities as $h_activitie) {  ?>
                <tr>
                    <td><?php echo $h_activitie['h_activities_id']; ?></td>
                    <td><?php echo $h_activitie['h_activities_title']; ?></td>
                    <td><?php echo $h_activitie['h_activities_description']; ?></td>
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
