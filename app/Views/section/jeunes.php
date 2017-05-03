<?php $this->layout('layout', ['title' => 'Jeunes']) ?>

<?php $this->start('main_content'); ?>



<div class="container-fluid">
    <div style="background-image:url(../public/uploads/sectionImage/photo2.jpg ?>);">
    <h1>Section Jeunes</h1></div>
</div>

<!-- SIDEBAR -->
<div class="container data-spy="scroll" data-target="#sidebar" data-offset="20"">
    <div class="row">
        <div class="col-sm-3" id="sidebar">
            <ul class="nav nav-pills nav-stacked">
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

<!-- Page Content -->
        <div class="col-md-9">
            <div id="description">
                <h1>Description</h1>
                <p><?php echo $ages; ?></p>
            </div>

            <div id="mercredi">
                <h1>Mercredi</h1>
                <?php foreach ($activities as $activity){
                    if ($activity['activities_title'] == 'Mercredi' && $activity['activities_16to25'] == 1){
                        echo $activity['activities_description'];
                    }
                }?>
            </div>

            <div id="vacances">
                <h1>Vacances Scolaires</h1>
                <?php foreach ($h_activities as $h_activity) {
                    if ($h_activity['h_activities_title'] == 'Vacances' && $h_activity['h_activities_16to25'] == 1){
                        echo $h_activity['h_activities_description'];
                    }               
                }?>
            </div>
            
            <div id="accompagnement">
                <h1>Accompagnement à la scolarité</h1>
                <?php foreach ($school as $school) {
                    if ($school['school_16to25'] == 1){
                        echo $school['school'];
                    }
                }?>
            </div>
        </div>
    </div>
</div>



<?php $this->stop('main_content'); ?>