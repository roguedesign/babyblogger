<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utils
 *
 * @author amy.munro
 */
class Utils {
    public static function createLink($page,$params = array()){
        $params = array_merge(array('page' => $page),$params);
        return 'index.php?'.http_build_query($params);
    }
    
    public static function redirect($page, array $params = array()) {
        header('Location: ' . self::createLink($page, $params));
        die();
    }
    
    public static function escape($string){
        return htmlspecialchars($string,ENT_QOUTES.ENT_QOUTES);
    }
    
    public static function getUrlParam($name){
        if (!array_key_exists($name, $_GET)){
            throw NotFoundException('URL Parameter'.$name."not found");
        }
        return $name;
    }
    
    public static function getFindByEmail($email) {
        $email = null;
        try {
            $email = self::getUrlParam('email');
        } catch (Exception $ex) {
            throw new NotFoundException('No email provided');
        }
        if (!is_numeric($email)) {
            throw new NotFoundException('no email provided');
        }
        $user = new UserDao();
        $email = $user->findByEmail($email);
        if ($email === null) {
            throw new NotFoundException('no email provided');
        }
        return $email;
    }

}

