<?php $this->layout('layout', ['title' => 'Enfance 3-5 ans']) ?>

<?php $this->start('main_content'); ?>


<div class="container-fluid">
    <div class="row">
        <div style="background-image:url(../uploads/sectionImage/enfant3-5.jpeg);" class="backgrSection">
        <h1>Section Enfance de 3 à 5 ans</h1></div>
    </div>    
</div>

<!-- SIDEBAR -->
<!--<div class="container" data-spy="scroll" data-target="#sidebar" data-offset="20">
    <div class="row">
        <div class="col-md-3">
            <div class="sidebar">             
                <ul>
                    <li class="active"><a href="#description">Description</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Activités <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#mercredi">Mercredi</a></li>
                            <li><a href="#vacances">Vacances Scolaires</a></li>
                            <li><a href="#accompagnement">Accompagnement à la scolarité</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>-->

<!-- Page Content -->
    <div class="container-fluid">
        <div class="row" id="part2">
            <div class="col-xs-12">
                <h1>Description</h1>
                <p><?php echo $ages; ?></p>
            </div>

            <h1>Activité</h1>
            <div id="mercredi">
                <h3>Mercredi</h3>
                <?php foreach ($activities as $activity){
                    if ($activity['activities_title'] == 'Mercredi' && $activity['activities_3to5'] == 1){
                        echo $activity['activities_description'];
                    }
                }?>
            </div>
            
            <div id="vendredi">
                <h3>Vendredi</h3>
                <?php foreach ($activities as $activity){
                    if ($activity['activities_title'] == 'Vendredi' && $activity['activities_6to12'] == 1){
                        echo $activity['activities_description'];
                    }
                }?>
            </div>

            <div id="vacances">
                <h1>Vacances Scolaires</h1>
                <?php foreach ($h_activities as $h_activity) {
                    if ($h_activity['h_activities_title'] == 'Vacances' && $h_activity['h_activities_3to5'] == 1){
                        echo $h_activity['activities_description'];
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
        <br><br><br><br><br>   
        </div>
    </div>



<?php $this->stop('main_content'); ?>
