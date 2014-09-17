<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ( './core/PHPHelper.php' );
?>

<!DOCTYPE html>
<html>
    <head>
        <?php Core\PHPHelper::includeFile( './partials/metadata.php' ); ?>
        
        <title>Comfenalco::VIP</title>
   </head>

    <body>
        
        <?php Core\PHPHelper::includeFile( './partials/header.php' ); ?>
        
        <div class="row jumbotron">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">Mensaje de error!</h3>
                    </div>
                    <div class="panel-body">
                        <h1>:'(</h1>
                        <p>
                            Lo sentimos, no posee privilegos para acceder a esta zona o su sesi&oacute;n ha expirado. 
                            Ingrese nuevamente o comun&iacute;quese
                            con el &aacute;rea de atenci&oacute;n al cliente.
                        </p>
                    </div>
                    <div class="panel-footer">
                        <a type="button" class="btn btn-success" href="login.php">
                            <span class="glyphicon glyphicon-arrow-left"></span> Ingresar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
