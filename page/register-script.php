<?php 

    $user = new User();
    
    if(array_key_exists(filter_input(INPUT_POST,"submit", FILTER_SANITIZE_STRING))){
         Mapper::mapUser($user, $_POST);
        $errors = UserRegistrationValidator::validate($user);   
    
    if (empty($errors)) {
        $password = $user->getPassword();
        $salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
        $hash = crypt($password, $salt);
	$flashes = null;
	$userDao = new UserDao();
	$savedUser = $userDao->save($user);
	Flash::addFlash('You have now Registered');
	
	Utils::redirect('threadlogin', array('id'=>1));
    }
   
    }
    else if (array_key_exists(filter_input(INPUT_POST,"submit", FILTER_SANITIZE_STRING))){
        $user->setFirstName('');
        $user->setLastName('');
        $user->setEmail('');
        $user->setPassword('');
        $user->setBirthdate('');
        
        $errors = UserRegistrationValidator::validate($user); 
    }
    

    
    
//       $data = array(
//        'comment'=>$_POST['comment']
//            );
//    TodoMapper::map($todo,$data);
   
 

?>