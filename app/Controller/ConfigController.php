<?php

namespace Controller;

use \W\Controller\Controller;
use \Model\ConfigModel;
use \Model\UserModel;

class ConfigController extends \W\Controller\Controller
{

    public function index()
    {
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 2) {
            $config_manager = new ConfigModel();
            $config = $config_manager->findAll();
            $this->show('config/index', ['config' => $config]);
        } else {
            echo "Vous n'êtes pas autorisé à accéder à cette section";
        }
    }
    //Mofifier les informations
    public function update($config_id)
    {
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 2) {
            $config_manager = new ConfigModel();
            $config = $config_manager->find($config_id);
            if (!empty($_POST)) {
                $config_sitename = $_POST['config_sitename'];
                $config_address = $_POST['config_address'];
                $config_phone = $_POST['config_phone'];
                $config_email = $_POST['config_email'];
                //$config_facebook = $_POST['config_facebook'];

                if (!empty($config_sitename) && !empty($config_address) && !empty($config_phone) && !empty($config_email)) {
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
        } else {
            echo "Vous n'êtes pas autorisé à accéder à cette section";
        }
    }

    public function view($config_id){
        $user_manager = new UserModel();
        $user = $this->getUser();
        if ($user['user_status'] == 2) {
            $config_manager = new ConfigModel();
            $config = $config_manager->find($config_id);
            $this->show('config/view', ['config' => $config]);
        } else {
            echo "Vous n'êtes pas autorisé à accéder à cette section";
        }
    }
}
