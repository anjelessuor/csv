<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ConfigModel;

class ConfigController extends \W\Controller\Controller
{

    public function index()
    {
        $this->allowTo('2'); //Instancie uniquement les admin a acceder à cette page
        $config_manager = new ConfigModel();
        $config = $config_manager->findAll();
        $this->show('config/index', ['config' => $config]);
    }
    //Mofifier les informations
    public function update($config_id)
    {
        $this->allowTo('2');
        $config_manager = new ConfigModel();
        $config = $config_manager->find($config_id);
            if (!empty($_POST)) {
                $config_sitename = $_POST['config_sitename'];
                $config_address = $_POST['config_address'];
                $config_phone = $_POST['config_phone'];
                $config_email = $_POST['config_email'];
                //$config_facebook = $_POST['config_facebook'];

                if (!empty($_POST)) {
                    $config = $config_manager->update([
                        'config_sitename' => $config_sitename,
                        'config_address' => $config_address,
                        'config_phone' => $config_phone,
                        'config_email' => $config_email,
                        //'config_facebook' => $config_facebook
                    ], $config_id); //Requête de mise à jour
                    $this->redirectToRoute('config_view', ['id' => $config['config_id']]);
                }
            }
        $this->show('config/update', ['config' => $config]);
    }

    public function view($config_id){
        $config_manager = new ConfigModel();
        $config = $config_manager->find($config_id);
        $this->show('config/view', ['config' => $config]);
    }
}
