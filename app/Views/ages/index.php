<?php $this->layout('layout-back', ['title' => 'Liste des ages']); ?>
<?php $this->start('main_content'); ?>
<!--Startlayout-->
<br>
<div class="container">
    <div class="row">
        <div class="col-xs-11">
            <div>
            <!--END of Startlayout-->

<!--Return-Button-block  -->
<div class="container">
    <div class="row">
        <a href="<?php echo $this->url('display_index') ?>" class="btn btn-warning">Retour</a>
    </div>    
</div>
<!--END of Return-Button-block  -->

  <table class="table table-striped">
      <thead>
          <tr>
              <th>ID</th>
              <th>Secteur d'ages</th>
              <th>Description</th>
              <th>Actions</th>
          </tr>
      </thead>
      <tbody>
      <?php foreach ($ages as $age) { ?>
          <tr>
              <td><h2><?php echo $age['ages_id'] ?> </h2></td>
              <td><h2><?php echo $age['ages_name'] ?> </h2></td>
              <td><h2><?php echo $age['ages_description'] ?> </h2></td>
              <td>
                  <a href="<?= $this->url('ages_update', ['ages_id' => $age['ages_id'] ]); ?>" class="btn btn-primary"> Modifier </a>
              </td>
          </tr>
      <?php } ?>
      </tbody>
  </table>
<?php $this->stop('main_content'); ?>
