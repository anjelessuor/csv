<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\EventsModel;

class EventController extends \W\Controller\Controller
{
    //Page qui liste les événements coté back
    public function index()
    {
        // $this->allowTo('2'); //Instancie uniquement les admin a acceder à cette page
        $events_manager = new EventsModel(); //Instancie la classe pour générer mes articles en BDD
        $events = $events_manager->findAll(); //Récupère tous les articles en bdd (SELECT * FROM articles)
        $this->show('event/index', ['event' => $events]); //Injecte la variable articles dans mma vue
    }

    //Page de création des articles
    public function create()
    {
        // $this->allowTo('2');
        //Traitement du formulaire
        if(!empty($_POST)){ //Vérifie que le formulaire est posté
            $events_title = $_POST['events_title'];
            $events_description = $_POST['events_description'];
            $events_localization = $_POST['events_localization'];
            $events_hours = $_POST['events_hours'];

            $target_dir = "uploads/eventsImage/";
            $target_file = $target_dir . basename($_FILES["events_image"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

            // Check file size

            if ($_FILES["events_image"]["size"] > 500000000000) {
                echo "L'image est trop volumineuse.";

                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Seuls les fichiers JPG, JPEG, PNG & GIF seront acceptés.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Le fichier n'a pas été chargé.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["events_image"]["tmp_name"], $target_file)) {
                    echo "'image' ". basename( $_FILES["events_image"]["name"]). " a bien été chargée.";
                } else {
                    echo "L'image n'a pas été chargée correctement.";
                }
            }

            $events_image = $_FILES["events_image"]["name"];


            $events_3to5 = isset($_POST['events_3to5']) ? $_POST['events_3to5'] : 0;
            $events_6to12 = isset($_POST['events_6to12']) ? $_POST['events_6to12'] : 0;
            $events_12to16 = isset($_POST['events_12to16']) ? $_POST['events_12to16'] : 0;
            $events_16to25 = isset($_POST['events_16to25']) ? $_POST['events_16to25'] : 0;
            $events_adults = isset($_POST['events_adults']) ? $_POST['events_adults'] : 0;

            //Requête sql pour insérer un événement
            $events_manager = new EventsModel(); //Instancier ma classe pour gérer mes articles en BDD
            if (!empty($_POST)){ //Je vérifie si les champs sont vides ou pas
            $event = $events_manager->insert([
                'events_title' => $events_title,
                'events_description' => $events_description,
                'events_localization' => $events_localization,
                'events_hours' => $events_hours,
                'events_image' => $_FILES["events_image"]["name"],
                'events_3to5' => $events_3to5,
                'events_6to12' => $events_6to12,
                'events_12to16' => $events_12to16,
                'events_16to25' => $events_16to25,
                'events_adults' => $events_adults,
            ]);

        }
    }
        $this->show('event/create');
    }

        //Mofifier un événement
        public function update($events_id)
        {
            // $this->allowTo('2');
            $events_manager = new EventsModel();
            $event = $events_manager->find($events_id);
                if (!empty($_POST)) {
                    $events_title = $_POST['events_title'];
                    $events_description = $_POST['events_description'];
                    $events_localization = $_POST['events_localization'];
                    $events_hours = $_POST['events_hours'];
                    $events_image = $_FILES["events_image"]["name"];
                    $events_3to5 = isset($_POST['events_3to5']) ? $_POST['events_3to5'] : 0;
                    $events_6to12 = isset($_POST['events_6to12']) ? $_POST['events_6to12'] : 0;
                    $events_12to16 = isset($_POST['events_12to16']) ? $_POST['events_12to16'] : 0;
                    $events_16to25 = isset($_POST['events_16to25']) ? $_POST['events_16to25'] : 0;
                    $events_adults = isset($_POST['events_adults']) ? $_POST['events_adults'] : 0;

                    if (!empty($events_title) && !empty($events_description)) {
                        $event = $events_manager->update([
                            'events_title' => $events_title,
                            'events_description' => $events_description,
                            'events_localization' => $events_localization,
                            'events_hours' => $events_hours,
                            'events_image' => $_FILES["events_image"]["name"],
                            'events_3to5' => $events_3to5,
                            'events_6to12' => $events_6to12,
                            'events_12to16' => $events_12to16,
                            'events_16to25' => $events_16to25,
                            'events_adults' => $events_adults,
                        ], $events_id); //Requête de mise à jour de l'évènement
                    }
                }
            $this->show('event/update', ['event' => $event]);
          }

        //Suppression d'un événement
        public function delete($events_id)
        {
            $events_manager = new EventsModel();
            $events_manager->delete($events_id); //Supprime l'article de la BDD
            $this->redirectToRoute('event_index'); //Après la suppression je
            //redirige l'utlisateur vers la liste des articles
        }

        //Voir un événement seul
        public function view($events_id)
        {
            $event_manager = new EventsModel();
            $event = $events_manager->find($events_id); //Récupere les données de l'article en question
            $this->show('event/view', ['event' => $event]);
        }

}
