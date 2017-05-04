<?php $this->layout('layout-back', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

    <div class="container text-center">
        <h1><?= $documents['documents_name'] ?></h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?= $this->url('documents_index'); ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a><br/><br/>
                <a href="<?= $this->url('documents_update', ['documents_id' => $documents['documents_id']]); ?>" class="btn btn-primary display">Modifier</a>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-5">
                        <h3><?php echo $documents['documents_name']; ?></h3>
                        <p>Document </p>
                        <iframe class="document" src="../uploads/documents/<?php echo $documents['documents_document'] ?>" width="300em"></iframe>
                    </div>
                    <div class="col-lg-7">
                        <p>Description</p>
                        <p><?php echo $documents['documents_description']; ?></p>
                        <br>
                        <p>Nom du document</p>
                        <p><?php echo $documents['documents_document']; ?></p>
                        <br>
                        <p>Lien</p>
                        <p><a href="../uploads/documents/<?php echo $documents["documents_document"] ?>" target="_blank"><?php echo $documents['documents_document'] ?></a></p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $this->stop('main_content') ?>
