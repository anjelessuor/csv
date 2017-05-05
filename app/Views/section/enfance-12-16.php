<?php $this->layout('layout', ['title' => 'Enfance 12-16 ans']) ?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="parallax-container" id="big" data-parallax="scroll" data-bleed="10" data-image-src="https://static.pexels.com/photos/89502/pexels-photo-89502.jpeg" data-natural-width="1920" data-natural-height="1200"><h1>Enfance de 12 à 16 ans</h1></div>
    </div>
</div>


<!-- Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="enfanceSection1">
            <div id="description">
                <h1>Description</h1>
                <p><?php echo $ages; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="enfanceSection2">
        <div id="mercredi">
            <h1>Mercredi</h1>
            <p><?php foreach ($activities as $activity){
                if ($activity['activities_title'] == 'Mercredi' && $activity['activities_12to16'] == 1){
                    echo $activity['activities_description'];
                }
            }?></p>
        </div>
    </div>
</div>
</div>

<div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="https://static.pexels.com/photos/89502/pexels-photo-89502.jpeg" data-natural-width="1920" data-natural-height="1200"></div>


<div class="container-fluid">
    <div class="row">
        <div class="enfanceSection2">
            <div id="vacances">
                <h1>Vacances Scolaires</h1>
                <p><?php foreach ($h_activities as $h_activity) {
                    if ($h_activity['h_activities_title'] == 'Vacances' && $h_activity['h_activities_12to16'] == 1){
                        echo $h_activity['h_activities_description'];

                    }
                }?></p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="enfanceSection4">
            <div id="accompagnement">
                <h1>Accompagnement à la scolarité</h1>
              <p><?php foreach ($school as $school) {
                    if ($school['school_12to16'] == 1){
                        echo $school['school'];
                    }
                }?></p>
            </div>
        </div>
    </div>
</div>


        <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="https://static.pexels.com/photos/89502/pexels-photo-89502.jpeg" data-natural-width="1920" data-natural-height="1200"></div>

<?php $this->stop('main_content'); ?>
