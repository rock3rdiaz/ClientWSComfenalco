<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once( './PHPHelper.php' );
Core\PHPHelper::includeFile( 'SessionManager.php' );

$session = new Core\SessionManager();

if( $session->getVariable( 'profile' ) == 'entrepreneur' ){
    
    /*La peticion de salida se hace mediatne get, la peticion ajax mediante post*/
    if( $_SERVER['REQUEST_METHOD'] == 'GET' ){
        $method = $_GET['method'];
    }
    else{
        $method = $_POST['method'];
    }
    
    switch( $method ){
        
        case 'getDetailStatisticsByFovis':
            Core\PHPHelper::includeFile( 'WSClient.php' );    
            $year = $_POST['year'];            
            
            $result = Core\WSClient::getDetailStatisticsByFovis( '800052640' , $year );
            echo Core\PHPHelper::JSONEncode( $result );
            break;
        
        case 'exit':
            $session->close();            
            Core\PHPHelper::redirect( 'http://www.comfenalcoquindio.com' );
            break;
        
        case 'paginate':
            Core\PHPHelper::includeFile( 'WSClient.php' );
            $min = $_POST['min'];
            $max = $_POST['max'];
            
            $result = Core\WSClient::getAllEmployeesByNITCompany( '800052640', $min, $max );
            echo Core\PHPHelper::JSONEncode( $result );
            break;
    }
}
else{
    Core\PHPHelper::redirect( 'error.php' );
}

?>
