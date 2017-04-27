<?php $this->layout('layout', ['title' => 'Liste des utilisateurs']) ?>

<?php $this->start('main_content'); ?>

    <div>

        <a href="<?= $this->url('security_register') ?>" class="btn btn-success">Ajouter un utilisateur</a>
        <a href="<?= $this->url('security_index') ?>" class="btn btn-info">Voir tout</a>
    </div>
    <div>

    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Titre</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) {  ?>
                <tr>

                    <td><?php echo $user['user_id']; ?></td>
                    <td><?php echo $user['user_firstname']; ?></td>
                    <td><?php echo $user['user_lastname']; ?></td>
                    <td><?php echo $user['user_email']; ?></td>
                    <td><?php echo $user['user_status']; ?></td>
                    <td>
                        <a href="<?= $this->url('security_edit', ['id' => $user['user_id']]); ?>" class="btn btn-primary">Modifier</a>
                        <a href="<?= $this->url('security_delete', ['id' => $user['user_id']]); ?>" class="btn btn-danger">Supprimer</a>

                    </td>
                </tr>
                <?php }  ?>
        </tbody>
    </table>
<?php $this->stop('main_content'); ?>
