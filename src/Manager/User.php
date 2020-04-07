<?php

namespace App\src\Manager;

use App\config\Parameter;

class User extends Database
{
    public function register(Parameter $post)
    {
        $sql = 'INSERT INTO utilisateur (username , mail, password) VALUES (?, ?, ?)';
        $this->createQuery($sql, [$post->get('username'), $post->get('mail'), password_hash($post->get('password'), PASSWORD_BCRYPT)]);
    }
    public function checkUser(Parameter $post)
    {
        $sql = 'SELECT COUNT(username) FROM utilisateur    WHERE username  = ?';
        $result = $this->createQuery($sql, [$post->get('username ')]);
        $isUnique = $result->fetchColumn();
        if($isUnique) {
            return '<p>Le pseudo existe déjà</p>';
        }
    }
}
