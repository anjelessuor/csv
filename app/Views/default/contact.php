<?php $this->layout('layout', ['title' => 'Contact']); ?>
<?php $this->start('main_content'); ?>



<?php if (!empty($_POST)) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $message = $_POST['message'];

        // echo $name;
        // echo $email;
        // echo $message;

        mail('', $firstname, $lastname, $message."  ".$email);
} ?>


<div class="container-fluid" id="contact">
    <div class="row contact">
        <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center">Contactez-snous</h2>
                <form name="sentMessage" method="POST" id="contact">
                    <div class="form-group">
                        <label for="lastname">Nom de famille :</label>
                        <input type="text" name="lastname" id="lastname" class="form-control"  placeholder="Nom de famille" required>
                    </div>
                    <div class="form-group">
                        <label for="firstname">Prénom : </label>
                        <input type="text" name="firstname" id="firstname" class="form-control"  placeholder="Prénom" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email : </label>
                        <input type="email" class="form-control" id="email" name="email"  placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Votre message :</label>
                        <textarea rows="10" cols="100" class="form-control" placeholder="Messages" name="message" id="message" required></textarea>

                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
    </div>
</div>

<?php $this->stop('main_content'); ?>
