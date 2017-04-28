<?php $this->layout('layout', ['title' => 'Mise à jour']) ?>

<?php $this->start('main_content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <ul>
                <a href="<?= $this->url('event_index') ?>" class="btn btn-primary">Evénements</a><br/><br/>
                <a href="<?= $this->url('activities_index') ?>" class="btn btn-primary">Activités</a><br/><br/>
                <a href="<?= $this->url('h_activities_index') ?>" class="btn btn-primary">Vacances</a><br/><br/>
                <a href="<?= $this->url('school_index') ?>" class="btn btn-primary">Accompagnement scolaire</a><br/><br/>
                <a href="<?= $this->url('partners_index') ?>" class="btn btn-primary">Partenaires</a><br/><br/>
                <a href="<?= $this->url('documents_index') ?>" class="btn btn-primary">Documents</a><br/><br/>
                <?php if ($w_user['user_status'] == 2) { ?>
                <a href="<?= $this->url('config_index'); ?>" class="btn btn-success">Mettre à jour la config</a><br/><br/>
                <a href="<?= $this->url('security_index'); ?>" class="btn btn-success">Mettre à jour les utilisateurs</a><br/><br/>
                <a href="<?= $this->url('ages_index'); ?>" class="btn btn-success">Mettre à jour les sections</a><br/><br/>
                <?php } ?>

            </ul>
        </div>
        <div class="col-lg-8">
            <a href="<?php echo $this->url('security_logout'); ?>" class="btn btn-danger">Déconnexion</a>
        </div>
    </div>
</div>


<?php $this->stop('main_content'); ?>


<?php $this->start('sidebar') ?>

<?php $this->stop('sidebar') ?>
