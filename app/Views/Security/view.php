<?php $this->layout('layout-back', ['title' => 'Mettre à jour un utilisateur']); ?>
<?php $this->start('main_content'); ?>


    <div class="container text-center">
        <h1><?= $users['user_firstname'] ." ". $users['user_lastname'] ?></h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <?php  if ($w_user['user_status'] == 1) {?>
                    <a href="<?php echo $this->url('display_index') ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
                    <a href="<?= $this->url('security_edituser', ['id' => $users['user_id']]); ?>" class="btn btn-primary display">Modifier</a>
                <?php  } else { ?>
                <a href="<?= $this->url('security_index'); ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a><br/><br/>
                <a href="<?= $this->url('security_edit', ['id' => $users['user_id']]); ?>" class="btn btn-primary display">Modifier</a>
                <?php  } ?>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-5">
                        <h2><i class="fa fa-user fa-4x" aria-hidden="true"></i></h2>
                    </div>
                    <div class="col-lg-7">
                        <p>Utilisateur : </p>
                        <p><?php echo $users['user_firstname'] ." ". $users['user_lastname']; ?></p>
                        <p>Email : </p>
                        <p><?php echo $users['user_email']; ?></p>

                        <p>Statut : </p>
                        <p><?php

                            if($users['user_status'] == 0){echo 'Utilisateur';}
                            elseif ($users['user_status'] == 1){echo 'Administateur';}
                            elseif ($users['user_status'] == 2){echo 'Grand administateur';}?>
                        </p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $this->stop('main_content'); ?>
