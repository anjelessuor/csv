<?php $this->layout('layout', ['title' => 'Enfance 12-16 ans']) ?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
    <img src="" alt="">
</div>

<!-- SIDEBAR -->
<div class="container data-spy="scroll" data-target="#sidebar" data-offset="20"">
    <div class="row">
        <nav class="col-sm-3" id="sidebar">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#description"></a></li>
                <li><a href="#description">Description</a></li>
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
            <div id="#description">
                <h1>Description</h1>
                <p><?php echo $ages; ?></p>
            </div>
            <div id="#mercredi">
                <h1>Mercredi</h1>
                <?php foreach ($activities as $activity){
                    if ($activity['activities_title'] == 'Mercredi' && $activity['activities_12to15'] == 1){
                        echo $activity['activities_description'];
                    }
                }?>
            </div>
            <div id="#vacances">
                
            </div>
            <div id="#accompagnement">
                
            </div>
        </div>
    </div>
</div>






<?php $this->stop('main_content'); ?>