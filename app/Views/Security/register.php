<?php $this->layout('layout', ['title' => 'Inscription']); ?>

<?php $this->start('main_content'); ?>

<a href="<?= $this->url('security_index'); ?>" class="btn btn-success">Revenir à la liste</a>
    <form action="" method="POST">
        <div class="form-group">
            <label for="user_firstname">Prénom : </label>
            <input type="text" name="user_firstname" class="form-control">
            <?= (isset($messages['user_firstname'])) ? '<span class="help-block">' .$messages['user_firstname'] . '</span>' : '' ?>
        </div>
        <div class="form-group">
            <label for="user_lastname">Nom : </label>
            <input type="text" name="user_lastname" class="form-control">
            <?= (isset($messages['user_lastname'])) ? '<span class="help-block">' .$messages['user_lastname'] . '</span>' : '' ?>
        </div>
        <div class="form-group">
            <label for="user_email">Email : </label>
            <input type="email" name="user_email" class="form-control">
            <?= (isset($messages['user_email'])) ? '<span class="help-block">' .$messages['user_email'] . '</span>' : '' ?>
        </div>
        <div class="form-group">
            <label for="user_password">Mot de passe : </label>
            <input type="password" name="user_password" id="user_password"  class="form-control">

        </div>
        <div class="form-group">
            <label for="user_cfpassword">Confirmation du mot de passe : </label>
            <input type="password" name="user_cfpassword" id="user_cfpassword"  class="form-control">
            <?= (isset($messages['user_password'])) ? '<span class="help-block">' .$messages['user_password'] . '</span>' : '' ?>
        </div>
        <button class="btn btn-submit"> Inscription </button>

    </form>

<?php $this->stop('main_content'); ?>
