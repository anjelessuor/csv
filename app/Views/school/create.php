
<?php $this->layout('layout-back', ['title' => 'Créer un accompagnement']); ?>

<?php $this->start('main_content'); ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-xs-11">
            <div>

    <form action="" method="POST">

        <div class="form-group">
            <label for="school_title"> Accompagnement : </label>
            <input id="school_title" name="school_title" class="form-control">
        </div>
        <div class="form-group">
            <label for="school_description"> Description : </label>
            <textarea id="school_description" name="school_description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="school_ages"> A quels secteurs s'appliquent cet accompagnement ? </label><br/>
            <label><input type="checkbox" name="school_3to5" value="1"/> 3 à 5 ans</label><br/>
            <label><input type="checkbox" name="school_6to12" value="1"/> 6 à 12 ans</label><br/>
            <label><input type="checkbox" name="school_12to16" value="1"/> 12 à 16 ans</label><br/>
            <label><input type="checkbox" name="school_16to25" value="1"/> 16 à 25 ans</label><br/>
            <label><input type="checkbox" name="school_adults" value="1"/> Adultes et familles</label><br/>
        </div>

        <button class="btn btn-submit"> Valider </button><br><br>
        <a href="<?= $this->url('school_index'); ?>" class="btn btn-success">Revenir à la liste</a>
    </form>

<?php $this->stop('main_content'); ?>
