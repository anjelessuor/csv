<?php $this->layout('layout', ['title' => 'Connexion']); ?>

<?php $this->start('main_content'); ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="user_email"> Votre mail : </label>
            <input id="user_email" name="user_email" class="form-control">
        </div>
        <div class="form-group">
            <label for="user_password"> Votre mot de passe : </label>
            <input id="user_password" name="user_password" type="password" class="form-control">
        </div>
        <button class="btn btn-submit"> Se connecter </button>
    </form>

<?php $this->stop('main_content'); ?>
