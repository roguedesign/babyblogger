<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PostDao
 *
 * @author amy.munro
 */
class PostDao extends Dao{
    public function insert(Post $post){
        $now = new DateTime();
        $post->setId(null);
        $sql = 'INSERT INTO post (id, postName, postComment)
                VALUES (:id, :postName, :postComment)';
        return $this->execute($sql, $post);
    }
    public function update(Post $post){
        $sql = 'UPDATE post SET
                postName = :postName,
                postComment = :postComment,
                WHERE
                id = :id';
        return $this->execute($sql, $post);
    }
    
    public function save(Post $post){
        if($post->getId() === null){
            return $this->insert($post);
        }
        return $this->update($post);
    }
    
    public function getParams($post){
        $params = array(
            ':id' => (int) $post->getId(),
            ':postName' => $post->getPostName(),
            ':postComment' => $post->getPostComment(),
        );
        
        return $params;
    }
    
    public function delete($id){
        $sql = '
                UPDATE post
                SET status = :status
                WHERE id = :id';
        $statement = $this->getDb()->prepare($sql);
        $this->executeStatement($statement, array(
            ':id' => $id,
            ':status' => 'DELETED',
        ));
        return $statement->rowCount() == 1;
    }
    
    public function findById($id){
        $row = $this->query('SELECT * FROM post WHERE id = ' . (int) $id)->fetch();
        if(!$row){
            return null;
        }
        $post = new Post();
        Mapper::mapPost($post, $row);
        return $post;
    }
    
    public function findPostsByThreadId($id) {
        $query = $this->getDb()->prepare('SELECT id, postName, postComment, date FROM post WHERE thread_id = :id');
        $array = array(
	'id' => $id
	
    );
 
        $query->execute($array);
        $rows = $query->fetchAll();
        $count = 0;
        $result = array();
        foreach ($rows as $row) {
            $post = new Post();
            Mapper::mapPost($post, $row);
            $result[$count] = $post;
            $count++;
        }

        return $result;
    }
    
    public function findPostsWithThreadNameByThreadId($id) {
        $query = $this->getDb()->prepare('SELECT t.threadName, p.postComment FROM thread t, post p WHERE t.id = p.thread_id AND p.thread_id =:id');
        $array = array(
	'id' => $id
	
    );
        $query->execute($array);
        $rows = $query->fetchAll();
        return $rows;
    }
    
    
}
