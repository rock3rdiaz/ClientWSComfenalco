<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once( './core/PHPHelper.php' );
Core\PHPHelper::includeFile( 'core/SessionManager.php' );

$session = new Core\SessionManager();

if( $session->getVariable( 'profile' ) != 'entrepreneur' ){
    
    Core\PHPHelper::redirect( 'error.php' );
}
else{
    
    Core\PHPHelper::includeFile( 'core/WSClient.php' );
}
?>

<!DOCTYPE html>
<html>
    <head>
        <?php Core\PHPHelper::includeFile( './partials/metadata.php' ); ?>
        
        <title>Comfenalco::VIP</title>
    </head>

    <body>
        
        <?php Core\PHPHelper::includeFile( './partials/header.php' ); ?>
        
        <div class="well">
            <h2 class="text-center">A continuaci&oacute;n detallamos los datos de la empresa <i>EDEQ</i></h2>
        </div>
        <h6 class="pull-right"><a href="changePass.php">Cambiar contrase&ntilde;a</a></h6>
        
        <br />
        <br />
        
        <ul class="nav nav-tabs" id="myTab">
            <li class="active">
                <a href="#mydata" data-toggle="tab">Mis datos</a>                
            </li>
            <li>
                <a href="#employees" data-toggle="tab">Empleados</a>                    
            </li>
            <li>
                <a href="#mynumbers" data-toggle="tab">Cifras</a>
            </li>
            <li class="navbar-right">
                <a href="core/RequestController.php?method=exit">Salir</a>
            </li>
        </ul>
        
        <?php Core\PHPHelper::includeFile( './partials/tabcontent.php' ); ?>
        
    </body>
</html>