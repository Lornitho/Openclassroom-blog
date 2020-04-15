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
    public function login(Parameter $post)
    {
        $sql = 'SELECT id, password FROM utilisateur WHERE username = ?';
        $data = $this->createQuery($sql, [$post->get('username')]);
        $result = $data->fetch();
        $isPasswordValid = password_verify($post->get('password'), $result->password);
        

        return [
            'result' => $result,
            'isPasswordValid' => $isPasswordValid
        ];
    }
    public function updatePassword(Parameter $post, $username)
    {
        $sql = 'UPDATE utilisateur SET password = ? WHERE username = ?';
        $this->createQuery($sql, [password_hash($post->get('password'), PASSWORD_BCRYPT), $username]);
    }
    public function getUsers()
    {
        $sql = 'SELECT user.id, user.pseudo, user.createdAt, role.name FROM user INNER JOIN role ON user.role_id = role.id ORDER BY user.id DESC';
        $result = $this->createQuery($sql);
        $users = [];
        foreach ($result as $row){
            $userId = $row['id'];
            $users[$userId] = $this->buildObject($row);
        }
        $result->closeCursor();
        return $users;
    }
}
