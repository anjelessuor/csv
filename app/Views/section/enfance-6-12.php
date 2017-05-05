<?php $this->layout('layout', ['title' => 'Enfance 6-12 ans']) ?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="parallax-container" id="big" data-parallax="scroll" data-bleed="10" data-image-src="https://static.pexels.com/photos/168866/pexels-photo-168866.jpeg" data-natural-width="1920" data-natural-height="1200"><h1>Enfance de 6 à 12 ans</h1></div>

    </div>
</div>


<!-- Page Content -->
<div class="container-fluid">
    <div class="row">
        <div class="enfanceSection1">
            <h1>Description</h1>
            <p><?php echo $ages; ?></p>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="enfanceSection2">
        <div id="mercredi">
            <h1>Mercredi</h1>
            <p><?php foreach ($activities as $activity){
                if ($activity['activities_title'] == 'Mercredi' && $activity['activities_6to12'] == 1){
                    echo $activity['activities_description'];
                }
            }?></p>
        </div>
      </div>
    </div>
</div>
        <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="https://static.pexels.com/photos/168866/pexels-photo-168866.jpeg" data-natural-width="1920" data-natural-height="1200"></div>

        <div class="container-fluid">
            <div class="row">
                <div class="enfanceSection2">
        <div id="vendredi">
            <h1>Vendredi</h1>
          <p><?php foreach ($activities as $activity){
                if ($activity['activities_title'] == 'Vendredi' && $activity['activities_6to12'] == 1){
                    echo $activity['activities_description'];
                }
            }?></p>
        </div>
    </div>
</div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="enfanceSection2">
            <div id="vacances">
                <h1>Vacances Scolaires</h1>
              <p><?php foreach ($h_activities as $h_activity) {
                    if ($h_activity['h_activities_title'] == 'Vacances' && $h_activity['h_activities_6to12'] == 1){
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
                <?php foreach ($school as $school) {
                    if ($school['school_6to12'] == 1){
                        echo $school['school'];
                    }
                }?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="https://static.pexels.com/photos/168866/pexels-photo-168866.jpeg" data-natural-width="1920" data-natural-height="1200"></div>
    </div>
</div>
<?php $this->stop('main_content'); ?>
