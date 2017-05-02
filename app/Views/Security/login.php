<?php $this->layout('layout-back', ['title' => 'Connexion']); ?>

<?php $this->start('main_content'); ?>

<div class="container">
    <div class="row">
        <div class="col-lg-4">
            <a href="<?= $this->url('default_home'); ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a><br/><br/>
            <a href="<?= $this->url('security_forget'); ?>" class="btn btn-danger display"> Mot de passe oublié ?</a>
        </div>
        <div class="col-lg-8">
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
        </div>
    </div>
</div>




<?php $this->stop('main_content'); ?>
