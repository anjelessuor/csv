<?php $this->layout('layout-back', ['title' => 'Réinitialisation du mot de passe']); ?>

<?php $this->start('main_content'); ?>

<div class="container text-center">
    <h1>Mot de passe oublié </h1>
</div>

<div class="container">
            <?php  if(isset($_GET['token'])) { ?>

            <form action="" method="POST">
                <div class="form-group">
                    <label for="user_password">Nouveau mot de passe : </label>
                    <input type="password" name="user_password" id="user_password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cfpassword">Confirmer nouveau mot de passe : </label>
                    <input type="password" name="cfpassword" id="cfpassword" class="form-control">
                </div>
                <button name="forgetPassword" class="btn btn-primary">Changer le mot de passe</button>
            </form>
        <?php } else { ?>
            <form action="" method="POST">
                <div class="form-group">
                    <label for="user_email">Email : </label>
                    <input type="email" name="user_email" id="user_email" class="form-control">
                </div>
                <button name="forgetSend" class="btn btn-primary display">Envoyer</button>
                <a href="<?= $this->url('display_index') ?>" class="btn btn-warning"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
            </form>
        <?php } ?>
</div>






<?php $this->stop('main_content'); ?>
