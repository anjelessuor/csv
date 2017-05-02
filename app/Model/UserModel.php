<?php
namespace Model;

use \W\Model\UsersModel;

class UserModel extends UsersModel //On hérite de UserModel car il possède des fonctionnalités spécifiques
{
    protected $primaryKey = 'user_id';

    function isValidToken($token) {
        $query = $dbh->prepare('SELECT id_user FROM users WHERE token_forget = :token AND NOW() < date_forget');
        $query->bindValue(':token', $token, PDO::PARAM_STR);
        $query->execute();
        return $query->fetchColumn();
    }


    function changeUserPassword($user_id, $user_password) {
        $query = $dbh->prepare('UPDATE users SET user_password = :user_password, token_forget = NULL, date_forget = NULL WHERE user_id = :user_id'); // On met à jour le mot de passe de l'utilisateur et on supprime le token
        $query->bindValue('user_id', $user_id);
        $query->bindValue('user_password', password_hash($user_password, PASSWORD_DEFAULT));
        return $query->execute();
    }


    public function changeTokenLogin($user_id) {
        $token_login = sha1(md5(sha1($user_id) . sha1(time()) . md5('1a4g51rz74hz21rz4h') . md5(uniqid()))); // Génére un token du style 3a4f74a7f5a7f4v7g4ae5g41ae2gea87gv
        $this->dbh->query('UPDATE users SET token_login = "'.$token_login.'" WHERE user_id = ' . $user_id);
        return $token_login;
    }

    function checkUserByEmail($user_email) {
        $query =$this->$dbh->prepare('SELECT id_user FROM users WHERE user_email = :user_email');
        $query->bindValue(':user_email', $user_email, PDO::PARAM_STR);
        $query->execute();
        return $query->fetchColumn();
    }


}
