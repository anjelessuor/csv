<?php $this->layout('layout-back', ['title' => 'Mettre à jour l\'utilisateur']); ?>
<?php $this->start('main_content'); ?>

    <div class="container text-center">
        <h1>Mettre à jour l'utilisateur <?= $users['user_firstname'] . " " . $users['user_lastname'] ?></h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?php  if ($w_user['user_status'] == 1) {?>
                    <a href="<?php echo $this->url('display_index') ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
                <?php  } else { ?>
                    <a href="<?php echo $this->url('security_index') ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
                <?php } ?>

            </div>
            <div class="col-lg-8">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="user_firstname">Prénom : </label>
                        <input type="text" name="user_firstname" class="form-control" value="<?php echo $users['user_firstname']; ?>">
                        <?= (isset($messages['user_firstname'])) ? '<span class="help-block">' .$messages['user_firstname'] . '</span>' : '' ?>
                    </div>
                    <div class="form-group">
                        <label for="user_lastname">Nom : </label>
                        <input type="text" name="user_lastname" class="form-control" value="<?php echo $users['user_lastname']; ?>">
                        <?= (isset($messages['user_lastname'])) ? '<span class="help-block">' .$messages['user_lastname'] . '</span>' : '' ?>
                    </div>
                    <div class="form-group">
                        <label for="user_email">Email : </label>
                        <input type="email" name="user_email" class="form-control" value="<?php echo $users['user_email']; ?>">
                        <?= (isset($messages['user_email'])) ? '<span class="help-block">' .$messages['user_email'] . '</span>' : '' ?>
                        <?= (isset($messages['exists'])) ? '<span class="help-block">' .$messages['exists'] . '</span>' : '' ?>
                    </div>
                    <div class="form-group">
                        <label for="user_password">Mot de passe : </label>
                        <input type="password" name="user_password" id="user_password"  class="form-control">
                        <?= (isset($messages['user_passwordlenght'])) ? '<span class="help-block">' .$messages['user_passwordlenght'] . '</span>' : '' ?>
                    </div>
                    <div class="form-group">
                        <label for="user_cfpassword">Confirmation du mot de passe : </label>
                        <input type="password" name="user_cfpassword" id="user_cfpassword"  class="form-control">
                        <?= (isset($messages['user_password'])) ? '<span class="help-block">' .$messages['user_password'] . '</span>' : '' ?>
                    </div>
                    <button class="btn btn-submit"> Valider </button>
                </form>
            </div>
        </div>
    </div>


<?php $this->stop('main_content'); ?>
