<?php $this->layout('layout', ['title' => 'Enfance 12-16 ans']) ?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
    <div style="background-image:url(../public/uploads/sectionImage/Enfance.jpg ?>);">
    <h1>Section Enfance de 12 à 16 ans</h1></div>
</div>


<!-- Page Content -->
<div class="container">
    <div class="row"> 
        <div id="description">
            <h1>Description</h1>
            <p><?php echo $ages; ?></p>
        </div>

        <div id="mercredi">
            <h1>Mercredi</h1>
            <?php foreach ($activities as $activity){
                if ($activity['activities_title'] == 'Mercredi' && $activity['activities_12to16'] == 1){
                    echo $activity['activities_description'];
                }
            }?>
        </div>

        <div id="vacances">
            <h1>Vacances Scolaires</h1>
            <?php foreach ($h_activities as $h_activity) {
                if ($h_activity['h_activities_title'] == 'Vacances' && $h_activity['h_activities_12to16'] == 1){
                    echo $h_activity['h_activities_description'];
                }               
            }?>
        </div>
        
        <div id="accompagnement">
            <h1>Accompagnement à la scolarité</h1>
            <?php foreach ($school as $school) {
                if ($school['school_12to16'] == 1){
                    echo $school['school'];
                }
            }?>
        </div>
    </div>
</div>






<?php $this->stop('main_content'); ?>