<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mapper
 *
 * @author amy.munro
 */
class Mapper {
    public static function mapUser(User $user, array $properties){
            if (array_key_exists('id', $properties)) {
                $user->setId($properties['id']);
        }                
            if (array_key_exists('firstName', $properties)) {
                $user->setFirstName($properties['firstName']);
        }
            if (array_key_exists('lastName', $properties)) {
                $user->setLastName($properties['lastName']);
        }
            if (array_key_exists('email', $properties)) {
                $user->setEmail($properties['email']);
        }
            if (array_key_exists('birthdate', $properties)) {
                $user->setBirthdate($properties['birthdate']);
        }
            if (array_key_exists('password', $properties)) {
                $user->setPassword($properties['password']);
        }
         if (array_key_exists('created_on', $properties)) {
            $createdOn = self::createDateTime($properties['created_on']);
            if ($createdOn) {
                $user->setCreatedOn($createdOn);
            }
        }
          
  }
  
    public static function mapPost(Post $post, array $properties) {
            if(array_key_exists('id', $properties)){
                $post->setId($properties['id']);
        }
            if(array_key_exists('postName', $properties)){
                $post->setPostName($properties['postName']);
        }
            if(array_key_exists('date', $properties)){
                $post->setDate($properties['date']);
        }
            if(array_key_exists('postComment', $properties)){
                $post->setPostComment($properties['postComment']);
            }
             if (array_key_exists('created_on', $properties)) {
                $createdOn = self::createDateTime($properties['created_on']);
                if ($createdOn) {
                    $post->setCreatedOn($createdOn);
                }
        }
  }
  
  public static function mapThread(Thread $thread, array $properties) {
            if(array_key_exists('id', $properties)){
                $thread->setId($properties['id']);
        }
            if(array_key_exists('threadName', $properties)){
                $thread->setThreadName($properties['threadName']);
        }
         if (array_key_exists('created_on', $properties)) {
            $createdOn = self::createDateTime($properties['created_on']);
            if ($createdOn) {
                $thread->setCreatedOn($createdOn);
            }
        }
  }
  
  private static function createDateTime($input){
        return DateTime::createFromFormat('Y-n-j H:i:s', $input);
  }
}
