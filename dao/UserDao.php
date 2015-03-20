<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserDao
 *
 * @author amy.munro
 */
class UserDao extends Dao{
    public function insert(User $user) {
        
        $user ->setId(null);
        $sql = 'INSERT INTO user (id, firstName, lastName, birthdate, email, password)
                VALUES (:id, :firstName, :lastName, :birthdate, :email, :password)';
        return $this->execute($sql, $user);
    }
    
    public function update(User $user){
        $sql = 'UPDATE user SET
                firstName = :firstName,
                lastName = :lastName,
                birthdate = :birthdate,
                email = :email,
                password = :password,
                WHERE
                id = :id';
        return $this->execute($sql, $user);        
    }
    
    public function save(User $user){
        if($user->getId() === null){
            return $this->insert($user);
        }
        return $this->update($user);
    }
    
    public function getParams($user){
        $params = array(
            ':id' => $user->getId(),
            ':firstName' => $user->getFirstName(),
            ':lastName' => $user->getLastName(),
            ':birthdate' => $user->getBirthdate(),
            ':email' => $user->getEmail(),
            ':password' => $user->getPassword(),
        );
        if($user->getId()){
            unset($params[':created_on']);
        }
        return $params;
    }
    
    public function delete($id){
        $sql = '
            UPDATE user
            SET status = :status
            WHERE id = :id';
        $statement = $this->getDb()->prepare($sql);
        $this->executeStatement($statement, array(
            ':id' => $id,
            ':status' => 'DELETED'
        ));
        return $statement->rowCount() == 1;        
    }
    
    public function findById($id){
        $row = $this->query('SELECT id FROM user WHERE id = ' . (int) $id)->fetch();
        if(!$row){
            return null;
        }
        $user = new User();
        Mapper::mapUser($user, $row);
        return $user;
    }
    
    public function findByEmail($email){
        $row = $this->query('SELECT * FROM user WHERE email = "' . $email . '";')->fetch();
        if(!$row){
            return null;
        }
        $user = new User();
        Mapper::mapUser($user, $row);
        return $user;
    }
}
