<?php
namespace Model;

use \W\Model\UsersModel;

class UserModel extends UsersModel //On hérite de UserModel car il possède des fonctionnalités spécifiques
{
    protected $primaryKey = 'user_id';
}
