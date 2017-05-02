<?php $this->layout('layout-back', ['title' => 'Liste des utilisateurs']) ?>

<?php $this->start('main_content'); ?>


    <div class="container text-center">
        <h1>Liste des utilisateurs</h1>
    </div>

    <div class="container">
        <a href="<?= $this->url('display_index') ?>" class="btn btn-warning"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
        <a href="<?= $this->url('security_register') ?>" class="btn btn-success">Ajouter</a>
        <?php if ($w_user['user_status'] == 2) { ?>
        <a href="<?= $this->url('security_edit', ['id' => $w_user['user_id']]); ?>" class="btn btn-success display">Mettre à jour l'admin</a>
        <?php } ?>
    </div>
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="id">ID</th>
                    <th class="title">Nom et Prénom</th>
                    <th class="list-content">Adresse E-mail</th>
                    <th class="title">Statut</th>
                    <th class="action">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) { ?>
                    <?php if ($user['user_status'] != 2) { ?>
                        <tr>
                            <td><?php echo $user['user_id']; ?></td>
                            <td><?php echo $user['user_firstname'] . " " .$user['user_lastname']; ?></td>
                            <td><?php echo $user['user_email']; ?></td>
                            <td><?php if($user['user_status'] == 0){echo 'Utilisateur';} elseif ($user['user_status'] == 1){echo 'Administateur';}; ?></td>
                            <td>
                                <a href="<?= $this->url('security_edit', ['id' => $user['user_id']]); ?>" class="btn btn-primary">Modifier</a>
                                <?php if($user['user_status'] != 2){ ?>
                                <a href="<?= $this->url('security_delete', ['id' => $user['user_id']]); ?>" class="btn btn-danger">Supprimer</a>
                                <?php } ?>
                                <a href="<?= $this->url('security_view', ['id' => $user['user_id']]); ?>" class="btn btn-info">Voir</a>

                            </td>
                        </tr>

                    <?php } ?>
                    <?php }  ?>
            </tbody>
        </table>
    </div>

<?php $this->stop('main_content'); ?>
