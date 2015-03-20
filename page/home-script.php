<?php 



$user = new User();
//var_dump($_POST);
if(array_key_exists("submit", $_POST)){
    $userDao = new UserDao();
    $user = $userDao->findByEmail($_POST['email']);
    if($user->getPassword()=== $_POST['password']){
    
    
    $flashes = null;
    Utils::redirect('threadlogin', array('thread-id'=>1));
    }
}


//function findByEmail($password, $hash){
//	if (crypt($password, $hash) === $hash) {
//	    return true;
//	}
//	return false;
//	}	

