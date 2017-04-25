<?php $this->layout('layout', ['title' => 'Inscription']); ?>

<?php $this->start('main_content'); ?>
<?php if (!empty($messages)){
    foreach($messages as $message){
        echo '<div>' . $message . '</div>';
    }
} ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="username">Login : </label>
            <input type="text" name="username" class="form-control" value="<?= $username; ?>">
            <?= (isset($messages['username'])) ? '<span class="help-block">' .$messages['username'] . '</span>' : '' ?>
        </div>
        <div class="form-group">
            <label for="email">Email : </label>
            <input type="email" name="email" class="form-control" value="<?= $email; ?>">

        </div>
        <div class="form-group">
            <label for="password">Mot de passe : </label>
            <input type="password" name="password" id="password"  class="form-control">

        </div>
        <div class="form-group">
            <label for="cfpassword">Confirmation : </label>
            <input type="password" name="cfpassword" id="cfpassword"  class="form-control">
        </div>
        <button class="btn btn-submit"> Inscription </button>
    </form>

<?php $this->stop('main_content'); ?>
