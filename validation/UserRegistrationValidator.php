<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserRegistrationValidator
 *
 * @author amy.munro
 */
class UserRegistrationValidator {
    
    public static function validate(User $user){
        $errors = array();
            if(!trim($user->getFirstName())){
                $errors[] = new Error('title','Please enter your First Name');
    }
            if(!trim($user->getLastName())){
                $errors[] = new Error('title','Please enter your Last Name');
    }
            if(!trim($user->getEmail())){
                $errors[] = new Error('title','Please enter your Email Address');
    }
            if(!trim($user->getPassword())){
                $errors[] = new Error('title','Please enter your password');
    }
            if(!trim($user->getBirthdate())){
                $errors[] = new Error('title','Please enter your birthdate');
    }
    return $errors;
    }
    
    public static function validating(Post $post){
        $errors = array();
            if(!trim($post->getPostName())){
                $errors[] = new Error('title','Please enter the Post Name');
    }
            if(!trim($post->getPostComment())){
                $errors[] = new Error('title','Please enter your Comment');
    }
    return $errors;
    }
//------------------------------------------------------------->login check unsure?
//    public static function login(User $user){
//        $errors = array();
//            if(substr_compare($user->getEmail(), $_POST['email'], 0)){
//                $errors[] = new Error('title', 'Not valid email');
//            if(substr_compare($user->getPassword(), $_POST['password'], 0)){
//                $errors[] = new Error('title', 'Not valid password');
//                    
//                }
//                else{
//                    $_SESSION['email']=trim($_POST['email']);
//                    Utils::redirect('thread');
//                    
//                }
//            
//                
//                }
//          return $errors;  
//    }
    
    
}

