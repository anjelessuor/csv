<?php $this->layout('layout', ['title' => 'Connexion']); ?>

<?php $this->start('main_content'); ?>

    <form action="" method="POST">
        <div class="form-group">
            <label> Votre pseudo ou mail : </label>
            <input id="username" name="username" class="form-control">
        </div>
        <div class="form-group">
            <label> Votre mot de passe : </label>
            <input id="password" name="password" type="password" class="form-control">
        </div>
        <button class="btn btn-submit"> Se connecter </button>
    </form>
    <?php var_dump($_SESSION); ?>
<?php $this->stop('main_content'); ?>
