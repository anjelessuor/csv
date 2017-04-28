<?php $this->layout('layout', ['title' => 'Mettre à jour un utilisateur']); ?>
<?php $this->start('main_content'); ?>

    <div>
        <a href="<?= $this->url('security_index'); ?>">Revenir à la liste</a>

    </div>

    <div class="row">
        <div class="col-lg-6">
            <h2><?php echo $users['user_firstname']; ?></h2>
            <h2><?php echo $users['user_lastname']; ?></h2>
        </div>
        <div class="col-lg-6">
            <p>Description</p>
            <p><?php echo $users['user_email']; ?></p>
            <br>
            <a href="<?= $this->url('security_edit', ['id' => $users['user_id']]); ?>" class="btn btn-primary">Modifier</a>
            <a href="<?= $this->url('security_index'); ?>" class="btn btn-info">Retourner à la liste</a>

        </div>
    </div>

<?php $this->stop('main_content'); ?>
