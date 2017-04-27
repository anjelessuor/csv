<?php $this->layout('layout', ['title' => 'Créer une nouvelle activité']); ?>

<?php $this->start('main_content'); ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="school_title"> Activité : </label>
            <input id="school_title" name="school_title" class="form-control">
        </div>
        <div class="form-group">
            <label for="school_description"> Description de l'activité : </label>
            <textarea id="school_description" name="school_description" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <label for="school_ages"> A quels secteurs s'appliquent cette activité ? </label><br/>
            <label><input type="checkbox" name="school_3to5" value="1"/> 3 à 5 ans</label><br/>
            <label><input type="checkbox" name="school_6to12" value="1"/> 6 à 12 ans</label><br/>
            <label><input type="checkbox" name="school_12to16" value="1"/> 12 à 16 ans</label><br/>
            <label><input type="checkbox" name="school_16to25" value="1"/> 16 à 25 ans</label><br/>
            <label><input type="checkbox" name="school_adults" value="1"/> Adultes et familles</label><br/>
        </div>

        <button class="btn btn-submit"> Valider </button>
        <a href="<?= $this->url('school_index'); ?>" class="btn btn-success">Revenir à la liste des activités</a>
    </form>

<?php $this->stop('main_content'); ?>
