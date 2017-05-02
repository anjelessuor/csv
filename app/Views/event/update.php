<?php $this->layout('layout-back', ['title' => 'Modifier un événement' .$event['events_title']]); ?>
<?php $this->start('main_content'); ?>


    <div class="container text-center">
        <h1>Mettre à jour l'événement <?= $event['events_title'] ?></h1>
    </div>
    <br>

    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <a href="<?php echo $this->url('activities_index') ?>" class="btn btn-warning display"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Retour</a>
            </div>
            <div class="col-lg-8">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="events_title">Titre : </label>
                        <input class="form-control" type="text" name="events_title" id="events_title" value="<?php echo $event['events_title']?>">
                    </div>
                    <div class="form-group">
                        <label for="events_description"> Description : </label>
                        <textarea class="form-control" name="events_description" id="events_description"><?php echo $event['events_description']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="events_localization"> Lieu : </label>
                        <input type="text" class="form-control" name="events_localization" id="events_localization" value="<?php echo $event['events_localization']?>">
                    </div>
                    <div class="form-group">
                        <label for="events_hours"> Horaires : </label>
                        <input type="text" class="form-control" name="events_hours" id="events_hours"  value="<?php echo $event['events_hours']?>">
                    </div>
                    <div class="form-group">
                        <label for="events_image"> Image : </label>
                        <input type="file" name="events_image" id="events_image">
                    </div>
                    <div class="form-group">
                        <label for="events_3to5">
                            <input type="checkbox" name="events_3to5" value=""/> 3 - 5 ans
                        </label><br>
                        <label for="events_6to12">
                            <input type="checkbox" name="events_6to12" value=""/> 6 - 12 ans
                        </label><br>
                        <label for="events_12to16">
                            <input type="checkbox" name="events_12to16" value=""/> 12 - 16 ans
                        </label><br>
                        <label for="events_16to25">
                            <input type="checkbox" name="events_16to25" value=""/> 16 - 25 ans
                        </label><br>
                        <label for="events_adults">
                            <input type="checkbox" name="events_adults" value=""/> Adultes - Famille
                        </label><br>
                    </div>

                    <button class="btn btn-submit"> Valider </div>
                </form>
            </div>
        </div>
    </div>




<?php $this->stop('main_content'); ?>
