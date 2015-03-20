<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Post
 *
 * @author amy.munro
 */
class Post {
    private $id;
    private $postName;
    private $date;
    private $postComment;
    private $threadName;
    
    public function getThreadName() {
        return $this->threadName;
    }
    
    public function getPostComment() {
        return $this->postComment;
    }
 
    public function getId() {
        return $this->id;
    }

    public function getPostName() {
        return $this->postName;
    }

    public function getDate() {
        return $this->date;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setPostName($postName) {
        $this->postName = $postName;
    }

    public function setDate($date) {
        $this->date = $date;
    }
        
    public function setPostComment($postComment) {
        $this->postComment = $postComment;
    }
    
    public function setThreadName($threadName) {
        $this->threadName = $threadName;
    }
    
}
