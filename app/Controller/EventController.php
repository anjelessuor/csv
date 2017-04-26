<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\EventModel;

class EventController extends \W\Controller\Controller
{
    //Page qui liste les événements coté back
    public function index()
    {
        $this->allowTo('admin'); //Instancie uniquement les admin a acceder à cette page
        $events_manager = new EventModel(); //Instancie la classe pour générer mes articles en BDD
        $events = $events_manager->findAll(); //Récupère tous les articles en bdd (SELECT * FROM articles)
        $this->show('event/index', ['events' => $events]); //Injecte la variable articles dans mma vue
    }

    //Page de création des articles
    public function create()
    {
        $this->allowTo('admin');
        //Traitement du formulaire
        if(!empty($_POST)){ //Vérifie que le formulaire est posté
            $events_title = $_POST['events_title'];
            $events_description = $_POST['events_description'];

            $events_manager = new EventsModel(); //Instancier ma classe pour gérer mes articles en BDD
            if (!empty($events_title) && !empty($events_description)){ //Je vérifie si les champs sont vides ou pas
            $event = $events_manager->insert([
                'events_title' => $events_title,
                'events_description' => $events_description,
                'user_id' => $this->getUser()['user_id'] //On récup l'id de l'utilisateur connecté
            ]); //Requête sql pour insérer un événement

        }
    }
        $this->show('event/create');
    }

        //Mofifier un événement
        public function update($events_id)
        {
            $this->allowTo('admin');
            $events_manager = new EventModel();
                if (!empty($_POST)) {
                    $events_title = $_POST['events_title'];
                    $events_description = $_POST['events_description'];
                    if (!empty($events_title) && !empty($events_content)) {
                        $event = $events__manager->update([
                            'events_title' => $events_title,
                            'events_description' => $events_description
                        ], $events_id); //Requête de mise à jour de l'évènment
                    }
                }
            $this->show('event/update', ['event' => $event]);
        }

        //Suppression d'un événement
        public function delete($events_id)
        {
            $events_manager = new EventModel();
            $events_manager->delete($events_id); //Supprime l'article de la BDD
            $this->redirectToRoute('event_index'); //Après la suppression je
            //redirige l'utlisateur vers la liste des articles
        }

        //Voir un événement seul
        public function view($events_id)
        {
            $event_manager = new ArticleModel();
            $event = $events_manager->find($events_id); //Récupere les données de l'article en question
            $this->show('event/view', ['event' => $event]);
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
