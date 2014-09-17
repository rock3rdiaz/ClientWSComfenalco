<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SessionManager
 *
 * @author rockerW7
 */

namespace Core;

require_once( 'PHPHelper.php' );

class SessionManager {
    
    const DURATION = '';
    
    public function __construct(){
        
        $this->start();
    }
    
    private function start(){
        
        session_start();
    }
    
    public function getVariable( $key ){
        
        if( \Core\PHPHelper::exist( $_SESSION["'" . $key . "'"] ) ){
            
            return $_SESSION["'" . $key . "'"];
        }
        else{
            
            return "Error!" ;
        }
        
    }
    
    public function close(){
        
        $_SESSION[] = array();
        session_destroy();
    }
    
    public function addVariable( $key, $value ){
        
        $_SESSION[ "'" . $key . "'" ] = $value;
    }
    
    public function removeVariable( $key ){
        
        unset( $_SESSION[ "'" . $key . "'" ] );
    }
}

?>
