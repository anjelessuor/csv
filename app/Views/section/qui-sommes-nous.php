<?php $this->layout('layout', ['title' => 'Qui sommes-nous?']) ?>

<?php $this->start('main_content'); ?>






<!-- Page Content -->
        <div class="col-md-9">
            <div id="quisommesnous">
                <h1>Qui sommes-nous ?</h1>
                <p><?php echo $accueil; ?></p>
            </div>

            <div id="valeurs">
                <h1>Nos valeurs</h1>
                <?php foreach ($presentations as $presentation){
                    if ($presentation['presentation_name'] == 'Nos valeurs' && $presentation['presentation_id'] == 3){
                        echo $presentation['presentation_description'];
                    }
                }?>
            </div>
            </div>

            <div id="vacances">
                <h1>Vacances Scolaires</h1>
                <?php foreach ($h_activities as $h_activity) {
                    if ($h_activity['h_activities_title'] == 'Vacances' && $h_activity['h_activities_3to5'] == 1){
                        echo $h_activity['h_activities_description'];
                    }
                }?>
            </div>

            <div id="accompagnement">
                <h1>Accompagnement à la scolarité</h1>
                <?php foreach ($school as $school) {
                    if ($school['school_3to5'] == 1){
                        echo $school['school'];
                    }
                }?>
            </div>
        </div>
    </div>
</div>





<?php $this->stop('main_content'); ?>
