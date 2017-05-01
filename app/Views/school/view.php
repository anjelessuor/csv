<?php $this->layout('layout-back', ['title' => $school['school_title']]); ?>
<?php $this->start('main_content'); ?>

<!--Startlayout-->
<br>
<div class="container">
    <div class="row">
        <div class="col-xs-11">
            <div>
            <!--END of Startlayout-->

    <div class="row">
        <div class="col-lg-6">
            <h2><?php echo $school['school_title']; ?></h2>
        </div>
        <div class="col-lg-6">
            <p>Description</p>
            <p><?php echo $school['school_description']; ?></p>
            <br>
            <p>Secteurs concernés par cet accompagnement</p>
            <p><?php
            if($school['school_3to5'] == 1){
                echo "Secteur Enfance 3 à 5 ans";
            };
            echo "<br/>";
            if($school['school_6to12'] == 1){
                echo "Secteur Enfance 6 à 12 ans";
            };
            echo "<br/>";
            if($school['school_12to16'] == 1){
                echo "Secteur Jeune 12 à 16 ans";
            };
            echo "<br/>";
            if($school['school_16to25'] == 1){
                echo "Secteur Jeune 16 à 25 ans";
            };
            echo "<br/>";
            if ($school['school_adults'] == 1){
                echo "Secteur Adultes et famille";
            };  ?></p>

            <br>
            <a href="<?= $this->url('school_edit', ['id' => $school['school_id']]); ?>" class="btn btn-primary">Modifier</a>
            <a href="<?= $this->url('school_index'); ?>" class="btn btn-info">Retourner à la liste</a>

        </div>
    </div>

<?php $this->stop('main_content'); ?>
