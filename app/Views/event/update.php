<?php $this->layout('layout', ['title' => 'Modifier un événement' .$events['events_title']]); ?>
<?php $this->start('main_content'); ?>

    <!-- Lien pour retour sur liste articles -->
    <a href="<?php echo $this->url('article_index') ?>">Retour à la liste des articles</a>

    <form method="POST" action="">
        <div class="form-group">
            <label for="title">Titre : </label>
            <input class="form-control" type="text" name="title" id="title" value="<?= $article['title'] ?>">
        </div>
        <div class="form-group">
            <label for="content"> Contenu : </label>
            <textarea class="form-control" name="content" id="content"><?= $article['content'] ?></textarea>
        </div>
        <div class="form-group">
            <label for="content"> Categorie : </label>
            <textarea class="form-control" name="category" id="ccategory"><?= '' ?></textarea>
        </div>
        <button class="btn btn-submit">Modifier : </div>
    </form>

<?php $this->stop('main_content'); ?>
