<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>

    <article>
        <p><?php echo $document['documents_name'] ?></p>
        <p><?php echo $documents['documnents_description'] ?></p>
        <p><?php echo $documents["documents_document"]["name"] ?></p>
    </article>


<?php $this->stop('main_content') ?>
