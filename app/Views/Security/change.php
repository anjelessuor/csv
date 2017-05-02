<?php

use \W\Controller\Controller;
// use Model\UserModel;

?>

<?php $this->layout('layout', ['title' => 'Changer mon mot de passe']) ?>

<?php $this->start('main_content') ?>

    <h3 class="text-center">Changer mon mot de passe</h3>
    <form class="" action="" method="post">
      <div class="form-group">
        <label for="user_password">Nouveau mot de passe :</label>
        <input id="user_password" name="password" type="text" class="form-control" placeholder="Mot de passe">
      </div>
      <div class="form-group">
        <label for="cfpassword">Confirmer le nouveau mot de passe :</label>
        <input id="cfpassword" name="cfpassword" type="text" class="form-control" placeholder="Mot de passe">
      </div>
      <button class="btn btn-success" type="submit" name="button-password">Changer mon mot de passe</button>
    </form>
  


<?php $this->stop('main_content') ?>
