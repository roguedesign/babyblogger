<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Thread
 *
 * @author amy.munro
 */
class Thread {
    private $id;
    private $threadName;
    
    public function getId() {
    return $this->id;
    }

    public function getThreadName() {
    return $this->threadName;
    }

    public function setId($id) {
    $this->id = $id;
    }

    public function setThreadName($threadName) {
    $this->threadName = $threadName;
    }
}

