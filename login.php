<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once( './core/PHPHelper.php' );

Core\PHPHelper::includeFile( 'core/WSClient.php' );
Core\PHPHelper::includeFile( 'core/SessionManager.php' );

if( Core\PHPHelper::exist( $_POST['username'] ) ){
    
    $result = Core\WSClient::validation( $_POST['username'], $_POST['password'] );
    
    if( $result->return ){
        
        $session = new Core\SessionManager(); //Crea e inicializa una sesion     
        
        $session->addVariable( 'username', 'rocker' );
        $session->addVariable( 'profile', 'entrepreneur' );
        $session->addVariable( 'last_access', Core\PHPHelper::getCurrentDate() );
        
        Core\PHPHelper::redirect( 'index.php' );
    }
    else{
        Core\PHPHelper::redirect( 'error.php' );
    } 
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
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    <div class="panel-body">
                        <form id="login_form" name="login_form" class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                            <div class="form-group">
                              <label for="username" class="col-lg-2 control-label">Nombre de usuario</label>
                              <div class="col-lg-4">
                                  <input type="text" class="form-control" id="username" name="username" placeholder="Username" required="true">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="password" class="col-lg-2 control-label">Contrase&ntilde;a</label>
                              <div class="col-lg-4">
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a" required="true">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-lg-offset-2 col-lg-10">
                                  <button type="submit" class="btn btn-success">
                                    <span class="glyphicon glyphicon-ok"></span> Login
                                  </button>
                                <!--<a class="btn btn-danger">
                                    <span class="glyphicon glyphicon-arrow-left"></span> Regresar
                                </a>-->
                              </div>
                            </div>
                        </form>
                    </div>                   
                </div>
            </div>
        </div>
    </body>
</html>
