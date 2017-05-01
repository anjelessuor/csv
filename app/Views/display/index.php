<?php $this->layout('layout-back', ['title' => 'Mise à jour']) ?>

<?php $this->start('main_content'); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <ul>
                <a href="<?php echo $this->url('security_logout'); ?>" class="btn btn-danger display">Déconnexion</a><br/><br/>
                <a href="<?= $this->url('event_index') ?>" class="btn btn-primary display">Evénements</a><br/><br/>
                <a href="<?= $this->url('activities_index') ?>" class="btn btn-primary display">Activités</a><br/><br/>
                <a href="<?= $this->url('h_activities_index') ?>" class="btn btn-primary display">Vacances</a><br/><br/>
                <a href="<?= $this->url('school_index') ?>" class="btn btn-primary display">Accompagnement scolaire</a><br/><br/>
                <a href="<?= $this->url('partners_index') ?>" class="btn btn-primary display">Partenaires</a><br/><br/>
                <a href="<?= $this->url('documents_index') ?>" class="btn btn-primary display">Documents</a><br/><br/>
                <a href="<?= $this->url('ages_index') ?>" class="btn btn-primary display">Sections</a><br/><br/>
                <a href="<?= $this->url('presentation_views') ?>" class="btn btn-primary display">Présentation</a><br/><br/>

                <?php if ($w_user['user_status'] == 2) { ?>
                <a href="<?= $this->url('config_index'); ?>" class="btn btn-success display">Mettre à jour la config</a><br/><br/>
                <a href="<?= $this->url('security_index'); ?>" class="btn btn-success display">Mettre à jour les utilisateurs</a><br/><br/>
                <a href="<?= $this->url('ages_index'); ?>" class="btn btn-success display">Mettre à jour les sections</a><br/><br/>
                <?php } ?>

            </ul>
        </div>
        <div class="col-lg-8">

        </div>
    </div>
</div>


<?php $this->stop('main_content'); ?>


<?php $this->start('sidebar') ?>

<?php $this->stop('sidebar') ?>
