<?php $this->layout('layout', ['title' => 'Qui sommes-nous?']) ?>

<?php $this->start('main_content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="parallax-container" id="big" data-parallax="scroll" data-bleed="10" data-image-src="https://static.pexels.com/photos/87584/pexels-photo-87584.jpeg" data-natural-width="1920" data-natural-height="1200"><h1>Qui sommes nous ?</h1></div>

    </div>
</div>



<!-- Page Content -->
<div class="container-fluid" id="center">
    <div class="row">
      <div class="enfanceSection1">
        <!-- DESCRIPTION -->
        <div id="description">
            <h1>Description</h1>
            <p><?php echo $presentation[1]['presentation_description']; ?></p>
        </div>
</div>
        <div id="valeurs">
          <div class="enfanceSection1">
            <h1>Nos valeurs</h1>
            <p><?php echo $presentation[2]['presentation_description']; ?></p>
        </div><br><br><br>
      </div><br><br><br>

<div class="enfanceSection1">
        <div id="missions">
            <h1>Nos missions</h1>
            <p><?php echo $presentation[3]['presentation_description']; ?></p>
        </div>
</div>
<div class="enfanceSection3">
        <div id="partenaires">
            <h1>Nos partenaires</h1>
            <?php foreach($partners as $partner) : ?>
            <!-- <p><?php echo $partner['partners_name']; ?></p>
            <p><?php echo $partner['partners_description']; ?></p>
            <p><?php echo $partner['partners_link']; ?></p> -->
            <?php endforeach; ?>
        </div>
    </div>
</div>
</div>


        <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="https://static.pexels.com/photos/87584/pexels-photo-87584.jpeg" data-natural-width="1920" data-natural-height="1200"></div>



<?php $this->stop('main_content'); ?>
