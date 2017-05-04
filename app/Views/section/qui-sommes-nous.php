<?php $this->layout('layout', ['title' => 'Qui sommes-nous?']) ?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
    <div style="background-image:url(../public/uploads/sectionImage/photo1.jpg ?>);">
    <h1>Qui-sommes-nous</h1></div>
</div>



<!-- Page Content -->
<div class="container">
    <div class="row"> 
        <!-- DESCRIPTION -->
        <div id="description">
            <h1>Description</h1>
            <p><?php echo $presentation[1]['presentation_description']; ?></p>
        </div>

        <div id="valeurs">
            <h1>Nos valeurs</h1>
            <p><?php echo $presentation[2]['presentation_description']; ?></p>
        </div>
        
        <div id="missions">
            <h1>Nos missions</h1>
            <p><?php echo $presentation[3]['presentation_description']; ?></p>            
        </div>
        
        <div id="partenaires">
            <h1>Nos partenaires</h1>
            <?php foreach($partners as $partner) : ?>
            <p><?php echo $partner['partners_name']; ?></p>
            <p><?php echo $partner['partners_description']; ?></p>   
            <p><?php echo $partner['partners_link']; ?></p>   
            <?php endforeach; ?>
        </div>     
    </div> 
</div>


<?php $this->stop('main_content'); ?>

