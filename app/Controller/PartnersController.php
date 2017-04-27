<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\PartnersModel;

class PartnersController extends \W\Controller\Controller
{
    //Page qui liste les événements coté back
    public function index()
    {
        // $this->allowTo('2'); //Instancie uniquement les admin a acceder à cette page
        $partners_manager = new PartnersModel();
        $partners = $partners_manager->findAll();
        $this->show('partners/index', ['partners' => $partners]);
    }

    //Page de création des articles
    public function create()
    {
        // $this->allowTo('2');
        //Traitement du formulaire
        if(!empty($_POST)){ //Vérifie que le formulaire est posté
            $partners_name = $_POST['partners_name'];
            $partners_description = $_POST['partners_description'];
            $partners_link = $_POST['partners_link'];
            
            $target_dir = "uploads/partners";
            $target_file = $target_dir . basename($_FILES["partners_image"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

            // Check file size
            if ($_FILES["partners_image"]["size"] > 2000000) {
                echo "Le fichier est trop volumineux.";
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
                if (move_uploaded_file($_FILES["partners_image"]["tmp_name"], $target_file)) {
                    echo "Le fichier ". basename( $_FILES["partners_image"]["name"]). " a bien été chargé.";
                } else {
                    echo "Le fichier n'a pas été chargé correctement.";
                }
            }

            $partners_image = $_FILES["partners_image"]["name"];

            //Requête sql pour insérer un partenaire
            $partners_manager = new PartnersModel(); //Instancier ma classe pour gérer mes articles en BDD
            if (!empty($_POST)){ //Je vérifie si les champs sont vides ou pas
            $partners = $partners_manager->insert([
                'partners_name' => $partners_name,
                'partners_description' => $partners_description,
                'partners_link' => $partners_link,
                'partners_image' => $_FILES["partners_image"]["name"]
            ]);

        }
    }
        $this->show('partners/create');
    }

        //Mofifier un partenaire
        public function update($partners_id)
        {
            // $this->allowTo('2');
            $partners_manager = new PartnersModel();
            $partners = $partners_manager->find($partners_id);
                if (!empty($_POST)) {
                    $partners_name = $_POST['partners_name'];
                    $partners_description = $_POST['partners_description'];
                    $partners_link = $_POST['partners_link'];
                    $partners_image = $_FILES["partners_image"]["name"];
                    if (!empty($_POST)) {
                        $partners = $partners_manager->update([
                            'partners_name' => $partners_name,
                            'partners_description' => $partners_description,
                            'partners_link' => $partners_link,
                            'partners_image' => $_FILES["partners_image"]["name"]
                        ], $partners_id); //Requête de mise à jour du partenaire
                    }
                }
            $this->show('partners/update', ['partners' => $partners]);
        }

        //Suppression d'un partenaire
        public function delete($partners_id)
        {
            $partners_manager = new PartnersModel();
            $partners_manager->delete($partners_id); //Supprime
            $this->redirectToRoute('partners_index'); //Après la suppression je redirige l'utlisateur vers la liste des partenaires
        }

        //Voir un partenaire seul
        public function view($partners_id)
        {
            $partners_manager = new PartnersModel();
            $partners = $partners_manager->find($partners_id); //Récupere les données de l'article en question
            $this->show('partners/view', ['partners' => $partners]);
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
