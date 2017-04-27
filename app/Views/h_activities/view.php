<?php $this->layout('layout', ['title' => $h_activities['h_activities_title']]); ?>
<?php $this->start('main_content'); ?>

    <div>
        <a href="<?= $this->url('h_activities_index'); ?>">Revenir à la liste des activités</a>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <h2><?php echo $h_activities['h_activities_title']; ?></h2>
        </div>
        <div class="col-lg-6">
            <p>Description</p>
            <p><?php echo $h_activities['h_activities_description']; ?></p>
            <br>
            <p>Prix</p>
            <p><?php echo $h_activities['h_activities_price']; ?></p>
            <br>
            <p>Secteurs concernés par cette activité : </p>
            <p><?php
            if($h_activities['h_activities_3to5'] == 1){
                echo "Secteur Enfance 3 à 5 ans";
            };
            echo "<br/>";
            if($h_activities['h_activities_6to12'] == 1){
                echo "Secteur Enfance 6 à 12 ans";
            };
            echo "<br/>";
            if($h_activities['h_activities_12to16'] == 1){
                echo "Secteur Jeune 12 à 16 ans";
            };
            echo "<br/>";
            if($h_activities['h_activities_16to25'] == 1){
                echo "Secteur Jeune 16 à 25 ans";
            };
            echo "<br/>";
            if ($h_activities['h_activities_adults'] == 1){
                echo "Secteur Adultes et famille";
            };  ?></p>

            <br>
            <a href="<?= $this->url('h_activities_edit', ['id' => $h_activities['h_activities_id']]); ?>" class="btn btn-primary">Modifier</a>
            <a href="<?= $this->url('h_activities_index'); ?>" class="btn btn-info">Retourner à la liste des activités</a>

        </div>
    </div>

<?php $this->stop('main_content'); ?>
