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
            $messages = '';
            $config_manager = new ConfigModel();
            $config = $config_manager->find($config_id);
            if (!empty($_POST)) {
                $config_sitename = $_POST['config_sitename'];
                $config_address = $_POST['config_address'];
                $config_phone = $_POST['config_phone'];
                $config_email = $_POST['config_email'];
                $errors = []; //tableau vide

                if (empty($config_sitename) || strlen($config_sitename) < 3) {
                    $errors['config_sitename'] =  "Le titre est vide ou invalide (3 caratères minimum).";
                }
                if (empty($config_address) || strlen($config_address) < 3) {
                    $errors['config_address'] =  "La description est vide ou invalide (3 caratères minimum).";
                }

                if (empty($config_phone) || strlen($config_phone) < 3) {
                    $errors['config_phone'] =  "Le numéro de téléphone est vide ou invalide (3 caratères minimum).";
                }
                if (empty($config_email) || !filter_var($config_email, FILTER_VALIDATE_EMAIL)) {
                    $errors['config_email'] =  "L'email est vide ou invalide.";
                }

                if (empty($errors)) {
                    $config = $config_manager->update([
                        'config_sitename' => $config_sitename,
                        'config_address' => $config_address,
                        'config_phone' => $config_phone,
                        'config_email' => $config_email,
                        //'config_facebook' => $config_facebook
                    ], $config_id); //Requête de mise à jour
                    $this->redirectToRoute('config_view', ['id' => $config['config_id']]);
                } else {
					$messages = $errors;
				}
            }
            $this->show('config/update', ['messages' => $messages, 'config' => $config]);
        } else {
            echo '<script type="text/javascript">alert("Vous n\'êtes pas autorisé à accéder à cette section !");</script>';
			$this->show('w_errors/404');
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
