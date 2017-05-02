<?php $this->layout('layout', ['title' => 'Adultes et Famille']) ?>

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
        <div class="col-md-9">
            <div id="#description">
                <h1>Description</h1>
                <p><?php echo $ages['ages_description']; ?></p>
            </div>
            <div id="#lundi">
                
            </div>
            <div id="#mardi">
                
            </div>
            <div id="#mercredi">
                
            </div>
            <div id="#jeudi">
                
            </div>
            <div id="#vendredi">
                
            </div>
        </div>
    </div>








<?php $this->stop('main_content'); ?>