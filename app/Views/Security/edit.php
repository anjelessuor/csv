<?php $this->layout('layout', ['title' => 'Mettre à jour l\'utilisateur']); ?>
<?php $this->start('main_content'); ?>
    <div>
        <a href="<?= $this->url('security_index'); ?>" class="btn btn-success">Revenir à la liste</a>
    </div>

    <form action="" method="POST">
        <div class="form-group">
            <label for="user_id"> ID utilisateur : </label>
            <input id="user_id" name="user_id" class="form-control" value="<?php echo $users['user_id']; ?>">
        </div>
        <div class="form-group">
            <label for="user_firstname"> Prénom : </label>
            <input id="user_firstname" name="user_firstname" class="form-control" value="<?php echo $users['user_firstname']; ?>">
        </div>
        <div class="form-group">
            <label for="user_lastname"> Nom : </label>
            <input id="user_lastname" name="user_lastname" class="form-control" value="<?php echo $users['user_lastname']; ?>">
        </div>
        <div class="form-group">
            <label for="user_email"> Email : </label>
            <input id="user_email" name="user_email" class="form-control" value="<?php echo $users['user_email']; ?>">
        </div>
        <div class="form-group">
            <label for="user_status"> Nom : </label>
            <input id="user_status" name="user_status" class="form-control" value="<?php if ($users['user_status'] == 0){'Utilisateur'
            } else{'administrateur'}; ?>">
            
        </div>

        <button class="btn btn-submit"> Valider </button>
    </form>

<?php $this->stop('main_content'); ?>
