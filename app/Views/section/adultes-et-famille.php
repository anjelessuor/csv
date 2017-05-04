<?php $this->layout('layout', ['title' => 'Adultes et Famille']) ?>


<?php $this->start('main_content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="https://static.pexels.com/photos/346297/pexels-photo-346297.jpeg" data-natural-width="1920" data-natural-height="1200"></div>
        <h1>Adultes & famille</h1>
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
   
        <!-- Activities -->
<div class="container-fluid">
    <div class="row">
        <div class="enfanceSection2">
            <div class="activities">
                <h1>Activités</h1>
                <div id="lundi">
                    <h3>Lundi</h3>
                    <?php foreach ($activities as $activity){
                        if ($activity['activities_title'] == 'Lundi' && $activity['activities_adults'] == 1){
                            echo $activity['activities_description'];
                        }
                    }?>
                </div>

                <div id="mardi">
                    <h3>Mardi</h3>
                    <?php foreach ($activities as $activity){
                        if ($activity['activities_title'] == 'Mardi' && $activity['activities_adults'] == 1){
                            echo $activity['activities_description'];
                        }
                    }?>
                </div>

                <div id="mercredi">
                    <h3>Mercredi</h3>
                    <?php foreach ($activities as $activity){
                        if ($activity['activities_title'] == 'Mercredi' && $activity['activities_adults'] == 1){
                            echo $activity['activities_description'];
                        }
                    }?>
                </div>

                <div id="jeudi">
                    <h3>Jeudi</h3>
                    <?php foreach ($activities as $activity){
                        if ($activity['activities_title'] == 'Jeudi' && $activity['activities_adults'] == 1){
                            echo $activity['activities_description'];
                        }
                    }?>
                </div>
                
                <div id="vendredi">
                    <h3>Vendredi</h3>
                    <?php foreach ($activities as $activity){
                        if ($activity['activities_title'] == 'Vendredi' && $activity['activities_adults'] == 1){
                            echo $activity['activities_description'];
                        }
                    }?>
                </div>
            </div>  
        </div>   
    </div> 
</div>

<div class="container-fluid">
    <div class="row">
        <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="https://static.pexels.com/photos/346297/pexels-photo-346297.jpeg" data-natural-width="1920" data-natural-height="1200"></div>
    </div> 
</div>

<?php $this->stop('main_content'); ?>
