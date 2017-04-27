<?php $this->layout('layout', ['title' => 'Accueil']) ?>

<?php $this->start('main_content') ?>
    <article>
        <p><?php echo $documents_name['documents_name'] ?></p>
        <p><?php echo $documents_description['documnents_description'] ?></p>
        <p><?php echo $documents_document = $_FILES["documents_document"]["name"] ?></p>
    </article>


<?php $this->stop('main_content') ?>
