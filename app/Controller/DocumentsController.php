<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\DocumentsModel;

class DocumentsController extends \W\Controller\Controller
{
    //Page qui liste les pièces disponibles au téléchargement
    public function index()
    {
        // $this->allowTo('2'); //Instancie uniquement les admin a acceder à cette page
        $documents_manager = new DocumentsModel();
        $documents = $documents_manager->findAll();
        $this->show('documents/index', ['documents' => $documents]);
    }

    //Page d'ajout des téléchargements
    public function create()
    {
        // $this->allowTo('2');
        //Traitement du formulaire
        if(!empty($_POST)){ //Vérifie que le formulaire est posté
            $documents_name = $_POST['documents_name'];
            $documents_description = $_POST['documents_description'];


            $target_dir = "uploads/documents/";
            $target_file = $target_dir . basename($_FILES["documents_document"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

            // Check file size

            if ($_FILES["documents_document"]["size"] > 20000000000) {
                echo "Le fichier est trop volumineux.";

                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "pdf") {
                echo "Seuls les fichiers au format PDF seront acceptés.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Echec du chargement.";
            // if everything is ok, try to upload file
            } else {
                if (move_uploaded_file($_FILES["documents_document"]["tmp_name"], $target_file)) {
                    echo "Le fichier ". basename( $_FILES["documents_document"]["name"]). " a bien été chargé.";
                } else {
                    echo "Echec du chargement.";
                }
            }

            $documents_document = $_FILES["documents_document"]["name"];

            //Requête sql pour insérer un document
            $documents_manager = new DocumentsModel(); //Instancier ma classe pour gérer mes articles en BDD
            if (!empty($_POST)){ //Je vérifie si les champs sont vides ou pas
            $documents = $documents_manager->insert([
                'documents_name' => $documents_name,
                'documents_description' => $documents_description,
                'documents_document' => $_FILES["documents_document"]["name"]
            ]);
            $this->redirectToRoute('documents_view', ['documents_id' => $documents['documents_id']]);
        }
    }
        $this->show('documents/create');
    }

        //Mettre à jour un fichier
        public function update($documents_id)
        {
            // $this->allowTo('2');
            $documents_manager = new DocumentsModel();
            $documents = $documents_manager->find($documents_id);
                if (!empty($_POST)) {
                    $documents_name = $_POST['documents_name'];
                    $documents_description = $_POST['documents_description'];
                    $documents_document = $_FILES["documents_document"]["name"];

                    if (!empty($_POST)) {
                        $documents = $documents_manager->update([
                            'documents_name' => $documents_name,
                            'documents_description' => $documents_description,
                            'documents_document' => $_FILES["documents_document"]["name"]
                        ], $documents_id); //Requête de mise à jour
                        $this->redirectToRoute('documents_view', ['documents_id' => $documents['documents_id']]);
                    }
                }
            $this->show('documents/update', ['documents' => $documents]);
        }

        //Suppression d'un fichier
        public function delete($documents_id)
        {
            $documents_manager = new DocumentsModel();
            $documents_manager->delete($documents_id); //Supprime l'article de la BDD
            $this->redirectToRoute('documents_index'); //Après la suppression je redirige
        }

        //Voir un fichier seul
        public function view($documents_id)
        {
            $documents_manager = new DocumentsModel();
            $documents = $documents_manager->find($documents_id); //Récupere les données de l'article en question
            $this->show('documents/view', ['documents' => $documents]);
        }

}
