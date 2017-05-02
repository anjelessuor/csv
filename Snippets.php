<!--********************-->
<!--*    BACKOFFICE    *-->
<!--********************-->

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
        <a href="<?php echo $this->url('display_index') ?>" class="btn btn-success btn-block">Retour</a>
    </div>    
</div>
<!--END of Return-Button-block  -->


<!--Multibuttons-->
<td>
    <a href="<?= $this->url('xxx_edit', ['id' => $help['xxx_id']]); ?>" class="btn btn-primary">Modifier</a>
    <a href="<?= $this->url('xxx_delete', ['id' => $help['xxx_id']]); ?>" class="btn btn-danger">Supprimer</a>
    <a href="<?= $this->url('xxx_view', ['id' => $help['xxx_id']]); ?>" class="btn btn-info">Voir</a>
</td>
<!--END of Multibuttons-->