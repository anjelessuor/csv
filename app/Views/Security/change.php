<?php

use \W\Controller\Controller;
use Model\UserModel;

?>

<?php $this->layout('layout', ['title' => 'Changer mon mot de passe']) ?>

<?php $this->start('main_content') ?>
  <div class="col-md-3 col-md-push-3">
    <h3 class="text-center">Changer mon mot de passe</h3>
    <form class="" action="" method="post">
      <div class="form-group">
        <label for="password">Nouveau mot de passe :</label>
        <input id="password" name="password" type="text" class="form-control" placeholder="Mot de passe">
      </div>
      <div class="form-group">
        <label for="cfpassword">Confirmer le nouveau mot de passe :</label>
        <input id="cfpassword" name="cfpassword" type="text" class="form-control" placeholder="Mot de passe">
      </div>
      <button class="btn btn-success" type="submit" name="button-password">Changer mon mot de passe</button>
    </form>
  </div>

  <!-- <?= var_dump($_POST['email']); ?> -->


<?php $this->stop('main_content') ?>
