<?php $this->layout('layout-back', ['title' => 'Mettre à jour l\'utilisateur']); ?>
<?php $this->start('main_content'); ?>

    <div class="container text-center">
        <h1>Mettre à jour l'utilisateur <?= $users['user_firstname'] . " " . $users['user_lastname'] ?></h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?php echo $this->url('security_index') ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
            </div>
            <div class="col-lg-8">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="user_id"> ID utilisateur : </label>
                        <p><?php echo $users['user_id']; ?><p/>
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
                        <label for="user_password"> Mot de passe : </label>
                        <input id="user_password" name="user_password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="user_status"> Status : </label>
                        <select class="selectpicker" name="user_status">
                            <option name="user_status" value="0">Utilisateur</option>
                            <option name="user_status" value="1">Administrateur</option>
                        </select>

                    </div>

                    <button class="btn btn-submit"> Valider </button>
                </form>
            </div>
        </div>
    </div>



<?php $this->stop('main_content'); ?>
