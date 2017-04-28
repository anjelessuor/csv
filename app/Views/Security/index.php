<?php $this->layout('layout', ['title' => 'Liste des utilisateurs']) ?>

<?php $this->start('main_content'); ?>

    <div>

        <a href="<?= $this->url('security_register') ?>" class="btn btn-success">Ajouter un utilisateur</a>
        <?php if ($w_user['user_status'] == 2) { ?>
        <a href="<?= $this->url('security_edit', ['id' => $w_user['user_id']]); ?>" class="btn btn-success">Mettre à jour l'admin</a>
        <?php } ?>
        <a href="<?= $this->url('display_index') ?>" class="btn btn-success">Gestion des articles</a>

    </div>
    <div>

    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Id</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Adresse E-mail</th>
                <th>Statut</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) { ?>
                <?php if ($user['user_status'] != 2) { ?>
                    <tr>
                        <td><?php echo $user['user_id']; ?></td>
                        <td><?php echo $user['user_firstname']; ?></td>
                        <td><?php echo $user['user_lastname']; ?></td>
                        <td><?php echo $user['user_email']; ?></td>
                        <td><?php if($user['user_status'] == 0){echo 'Utilisateur';} elseif ($user['user_status'] == 1){echo 'Administateur';}; ?></td>
                        <td>
                            <a href="<?= $this->url('security_edit', ['id' => $user['user_id']]); ?>" class="btn btn-primary">Modifier</a>
                            <?php if($user['user_status'] != 2){ ?>
                                <a href="<?= $this->url('security_delete', ['id' => $user['user_id']]); ?>" class="btn btn-danger">Supprimer</a>
                                <?php } ?>

                            </td>
                        </tr>

                <?php } ?>
                <?php }  ?>
        </tbody>
    </table>
<?php $this->stop('main_content'); ?>
