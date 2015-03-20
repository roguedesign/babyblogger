<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ThreadDao
 *
 * @author amy.munro
 */
class ThreadDao extends Dao{
    public function insert(Thread $thread){
        $now = new DateTime();
        $thread->setId(null);
        $sql = 'INSERT INTO thread (id, threadName)
                VALUES (:id, :threadName)';
        return $this->execute($sql, $user);
    }
    
    public function update(Thread $thread){
        $sql = 'UPDATE thread SET
                threadName = :threadName';
        return $this->execute($sql, $thread);
    }
    
    public function save(Thread $thread){
        if($thread->getId() === null){
            return $this->insert($thread);
        }
        return $this->update($thread);
    }
    
    public function getParams($thread){
        $params = array(
            ':id' => $thread->getId(),
            ':threadName' => $thread->getThreadName(),
        );
        if($thread->getId()){
            unset($params[':created_on']);
        }
        return $params;
    }
    
    public function delete($id){
        $sql = '
            UPDATE thread 
            SET status = :status
            WHERE id = id';
        $statement = $this->getDb()->prepare($sql);
        $this->executeStatement($statement, array(
            ':id' => $id,
            ':status' => 'DELETED'
        ));
        return $statement->rowCount() == 1;
    }
    
    public function findById($id){
        $row = $this->querry('SELECT id FROM thread WHERE id = ' . (int) $id)->fetch();
        if(!$row){
            return null;
        }
        $thread = new Thread();
        mapThread::map($thread, $row);
        return $thread;
    }
}
