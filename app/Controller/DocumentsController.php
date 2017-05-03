<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\DocumentsModel;
use \Model\UserModel;

class DocumentsController extends \W\Controller\Controller
{
    //Page qui liste les pièces disponibles au téléchargement
    public function index()
    {
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 1 || $user['user_status'] == 2) {
            $documents_manager = new DocumentsModel();
            $documents = $documents_manager->findAll();
            $this->show('documents/index', ['documents' => $documents]);
        } else {
            echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
            $this->show('w_errors/404');
        }
    }

    //Page d'ajout des téléchargements
    public function create()
    {
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 1 || $user['user_status'] == 2) {
            $messages = '';
            if(!empty($_POST)){ //Vérifie que le formulaire est posté
                $documents_name = $_POST['documents_name'];
                $documents_description = $_POST['documents_description'];
                $errors = []; //tableau vide

                $target_dir = "uploads/documents/";
                $target_file = $target_dir . basename($_FILES["documents_document"]["name"]);
                $uploadOk = 1;
                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

                if (empty($documents_name) || strlen($documents_name) < 3) {
                    $errors['documents_name'] =  "Le titre est vide ou invalide (3 caratères minimum).";
                }
                if (empty($documents_description) || strlen($documents_description) < 3) {
                    $errors['documents_description'] =  "La description est vide ou invalide (3 caratères minimum).";
                }

                // Check file size

                if ($_FILES["documents_document"]["size"] > 20000000000) {
                    $errors['documents_size'] =  "Le fichier est trop volumineux.";
                    $uploadOk = 0;
                }
                // Allow certain file formats
                if($imageFileType != "pdf") {
                    $errors['documents_type'] =  "Seuls les fichiers au format PDF seront acceptés.";
                    $uploadOk = 0;
                }
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    $errors['documents_load'] =  "Echec du chargement.";
                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["documents_document"]["tmp_name"], $target_file)) {
                        echo "Le fichier ". basename( $_FILES["documents_document"]["name"]). " a bien été chargé.";
                    } else {
                        $errors['documents_load'] =  "Echec du chargement.";
                    }
                }

                $documents_document = strtr($_FILES["documents_document"]["name"] ,
                'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ ',
                'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                $documents_document = preg_replace('/([^.a-z0-9]+)/i', '-', $_FILES["documents_document"]["name"]);

                //Requête sql pour insérer un document
                $documents_manager = new DocumentsModel(); //Instancier ma classe pour gérer mes articles en BDD
                if (empty($errors)){ //Je vérifie si les champs sont vides ou pas
                    $documents = $documents_manager->insert([
                        'documents_name' => $documents_name,
                        'documents_description' => $documents_description,
                        'documents_document' => $_FILES["documents_document"]["name"],

                    ]);
                    $this->redirectToRoute('documents_view', ['documents_id' => $documents['documents_id']]);
                } else {
					$messages = $errors;
				}
            }
            $this->show('documents/create', ['messages' => $messages]);
        } else {
            echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
            $this->show('w_errors/404');
        }
    }

        //Mettre à jour un fichier
        public function update($documents_id)
        {
            $user_manager = new UserModel();
            $user = $this->getUser();
            if ($user['user_status'] == 1 || $user['user_status'] == 2) {
                $messages = '';
                $documents_manager = new DocumentsModel();
                $documents = $documents_manager->find($documents_id);
                if (!empty($_POST)) {
                    $documents_name = $_POST['documents_name'];
                    $documents_description = $_POST['documents_description'];
                    $documents_document = $_FILES["documents_document"]["name"];
                    $errors = []; //tableau vide

                    $target_dir = "uploads/documents/";
                    $target_file = $target_dir . basename($_FILES["documents_document"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

                    if (empty($documents_name) || strlen($documents_name) < 3) {
                        $errors['documents_name'] =  "Le titre est vide ou invalide (3 caratères minimum).";
                    }
                    if (empty($documents_description) || strlen($documents_description) < 3) {
                        $errors['documents_description'] =  "La description est vide ou invalide (3 caratères minimum).";
                    }

                    // Check file size

                    if ($_FILES["documents_document"]["size"] > 20000000000) {
                        $errors['documents_size'] =  "Le fichier est trop volumineux.";
                        $uploadOk = 0;
                    }
                    // Allow certain file formats
                    if($imageFileType != "pdf") {
                        $errors['documents_type'] =  "Seuls les fichiers au format PDF seront acceptés.";
                        $uploadOk = 0;
                    }
                    // Check if $uploadOk is set to 0 by an error
                    if ($uploadOk == 0) {
                        $errors['documents_load'] =  "Echec du chargement.";
                        // if everything is ok, try to upload file
                    } else {
                        if (move_uploaded_file($_FILES["documents_document"]["tmp_name"], $target_file)) {
                            echo "Le fichier ". basename( $_FILES["documents_document"]["name"]). " a bien été chargé.";
                        } else {
                            $errors['documents_load'] =  "Echec du chargement.";
                        }
                    }

                    $documents_document = strtr($_FILES["documents_document"]["name"] ,
                    'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ ',
                    'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
                    $documents_document = preg_replace('/([^.a-z0-9]+)/i', '-', $_FILES["documents_document"]["name"]);

                    if (empty($errors)) {
                        $documents = $documents_manager->update([
                            'documents_name' => $documents_name,
                            'documents_description' => $documents_description,
                            'documents_document' => $_FILES["documents_document"]["name"]
                        ], $documents_id); //Requête de mise à jour
                        $this->redirectToRoute('documents_view', ['documents_id' => $documents['documents_id']]);
                    } else {
    					$messages = $errors;
    				}
                }
                $this->show('documents/update', ['messages' => $messages, 'documents' => $documents]);
            } else {
                echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
                $this->show('w_errors/404');
            }
        }

        //Suppression d'un fichier
        public function delete($documents_id)
        {
            $user_manager = new UserModel();
            $user = $this->getUser();
            if ($user['user_status'] == 1 || $user['user_status'] == 2) {
                $documents_manager = new DocumentsModel();
                $documents_manager->delete($documents_id); //Supprime l'article de la BDD
                $this->redirectToRoute('documents_index'); //Après la suppression je redirige
            } else {
                echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
                $this->show('w_errors/404');
            }
        }

        //Voir un fichier seul
        public function view($documents_id)
        {
            $user_manager = new UserModel();
            $user = $this->getUser();
            if ($user['user_status'] == 1 || $user['user_status'] == 2) {
                $documents_manager = new DocumentsModel();
                $documents = $documents_manager->find($documents_id); //Récupere les données de l'article en question
                $this->show('documents/view', ['documents' => $documents]);
            } else {
                echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
                $this->show('w_errors/404');
            }
        }

}
