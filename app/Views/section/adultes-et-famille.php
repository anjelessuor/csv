<?php $this->layout('layout', ['title' => 'Adultes et Famille']) ?>

<?php $this->start('main_content'); ?>
<br><br><br><br><br><br><br>
<div class="container-fluid">
    <img src="" alt="">
</div>


<!-- SIDEBAR -->
<div class="container data-spy="scroll" data-target="#sidebar" data-offset="20"">
    <div class="row">
        <div class="col-md-3" id="sidebar">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#description">Description</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Activités <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#lundi">Lundi</a></li>
                        <li><a href="#mardi">Mardi</a></li>
                        <li><a href="#mercredi">Mercredi</a></li>
                        <li><a href="#jeudi">Jeudi</a></li>       
                        <li><a href="#vendredi">Vendredi</a></li>                        
                    </ul>
                
                </li>
            </ul>  
        </div>    

<!-- Page Content -->
    <div class="row">
        <div class="col-md-9">
            <!-- DESCRIPTION -->
            <div id="description">
                <h1>Description</h1>
                <p><?php echo $ages; ?></p>
            </div>

            <!-- Activities -->
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

                <div class="event">
                    <h3>Évènement à venir</h3>
                    <?php foreach ($events as $event){ 
                        if ($event['events_adults'] == 1){ ?>
                            <h1>
                                <?php echo $event['events_title']; ?>
                            </h1>
                            <p>
                                <?php echo $event['events_description']; ?>
                            </p>
                            <p>
                                <?php echo $event['events_localization']; ?>
                            </p>
                            <p>
                                <?php echo $event['events_hours']; ?>
                            </p>                                 
                    }
                    <?php endforeach; ?>   
                </div>
            </div>
        </div>
    </div> 
</div>








<?php $this->stop('main_content'); ?>