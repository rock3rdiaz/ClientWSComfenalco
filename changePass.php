<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

require_once( './core/PHPHelper.php' );
Core\PHPHelper::includeFile( 'core/SessionManager.php' );

$session = new Core\SessionManager(); //Crea o recupera (inicializandola de una vez) una sesion     
        
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
        
        <form class="form-horizontal" role="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div class="form-group">
              <label for="current_password" class="col-lg-2 control-label">Contrase&ntilde;a actual</label>
              <div class="col-lg-4">
                  <input type="password" class="form-control" id="current_password" name="current_password" placeholder="Actual" required="true">
              </div>
            </div>
            <div class="form-group">
              <label for="pass1" class="col-lg-2 control-label">Nueva contrase&ntilde;a</label>
              <div class="col-lg-4">
                  <input type="password" class="form-control" id="new_pass1" name="new_pass1" placeholder="Nueva" required="true">
              </div>
            </div>
            <div class="form-group">
              <label for="pass2" class="col-lg-2 control-label">Repita su nueva contrase&ntilde;a</label>
              <div class="col-lg-4">
                  <input type="password" class="form-control" id="new_pass2" name="new_pass2" placeholder="Re-Nueva" required="true">
              </div>
            </div>
            <div class="form-group">
              <div class="col-lg-offset-2 col-lg-10">
                  <button type="submit" class="btn btn-success">
                    <span class="glyphicon glyphicon-ok"></span> Cambiar
                  </button>
                  <a class="btn btn-danger" href="index.php">
                    <span class="glyphicon glyphicon-arrow-left"></span> Regresar
                </a>
              </div>
            </div>
        </form>
        
        <div id="div_result_msg"></div>
        
        <script type="text/javascript" src="public_html/js/views/msg_result.js"></script>
        
        <?php 
            if( Core\PHPHelper::exist( $_POST['current_password'] ) &&
                        Core\PHPHelper::exist( $_POST['new_pass1'] ) &&
                        Core\PHPHelper::exist( $_POST['new_pass1'] ) ){

                $result = Core\WSClient::changePassword( $_POST['current_password'], 
                                    $_POST['new_pass1'], 
                                    $_POST['new_pass2'] );

                if( $result ){
                    
                    /*showMsgResult( 'tipo_mensaje', 'contenedor_donde_se_mostrara' )*/
                    Core\PHPHelper::insertJSCode( 'ViewsFactory.showMsgResult( "success", "div_result_msg" )' );
                }
                else{
                  
                    Core\PHPHelper::insertJSCode( 'ViewsFactory.showMsgResult( "error", "div_result_msg" )' );
                }
            }
        ?>        
    </body>
</html>
