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
            $documents_document = $_POST["documents_document"];

            //Requête sql pour insérer un document
            $documents_manager = new DocumentsModel(); //Instancier ma classe pour gérer mes articles en BDD
            if (!empty($_POST)){ //Je vérifie si les champs sont vides ou pas
            $documents = $documents_manager->insert([
                'documents_name' => $documents_name,
                'documents_description' => $documents_description,
                'documents_document' => $documents_document
            ]);

        }
    }
        $this->show('documents/create');
    }

        //Mofifier un fichier
        public function update($documents_id)
        {
            // $this->allowTo('2');
            $documents_manager = new DocumentsModel();
            $documents = $documents_manager->find($documents_id);
                if (!empty($_POST)) {
                    $documents_name = $_POST['documents_name'];
                    $documents_description = $_POST['documents_description'];
                    $documents_document = $_POST["documents_document"];

                    if (!empty($events_title) && !empty($events_description)) {
                        $event = $events_manager->update([
                            'documents_name' => $documents_name,
                            'documents_description' => $documents_description,
                            'documents_document' => $documents_document
                        ], $documents_id); //Requête de mise à jour
                    }
                }
            $this->show('documents/update', ['documents' => $documents]);
        }

        //Suppression d'un téléchargment
        public function delete($documents_id)
        {
            $documents_manager = new DocumentsModel();
            $documents_manager->delete($documents_id); //Supprime l'article de la BDD
            $this->redirectToRoute('documents_index'); //Après la suppression je redirige
        }

        //Voir un événement seul
        public function view($documents_id)
        {
            $documents_manager = new DocumentsModel();
            $documents = $documents_manager->find($documents_id); //Récupere les données de l'article en question
            $this->show('documents/view', ['documents' => $documents]);
        }


        // //Permet de remplir rapidement la BDD /!!!!!\ ta RACE quand tu fais /random ça rajoute 100 articles
        // public function random()
        // {
        //     $faker = \Faker\Factory::create('fr_FR');
        //     $article_manager = new ArticleModel();
        //     for ($i = 0; $i < 100; $i++){
        //         $article_manager->insert([
        //             'title' => $faker->sentence(), //Générer une phrase aléatoire
        //             'content' => $faker->realText(), //Générer texte aléatoire
        //             'created_at' => $faker->dateTimeBetween('-1 year')->format('Y-m-d H:i:s') //Générer date aléatoire
        //         ]);
        //     }
        // }
}
