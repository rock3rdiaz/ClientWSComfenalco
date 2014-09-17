<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$data = Core\WSClient::getAllEmployeesByNITCompany( '800052640' );//NIT traido una vez se loguea en el sistema

?>

<br />

<div class="panel panel-success">
    
    <div class="panel-heading">
        <h2 class="panel-title text-center">Personas asociadas</h2>
    </div>    
    <table class="table">        
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Direcci&oacute;n</th>
                <th>Tel&eacute;fono</th>
                <th>Fecha de ingreso</th>
                <th>Categoria</th>
                <th>Estado</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach( $data as $d ):?>
                <?php foreach( $d as $r ):?>                
                    <tr>
                        <td><?php echo Core\PHPHelper::formatText( $r->trbNombre . ' ' . $r->trb1ape. ' ' . $r->trb2ape );?></td>
                        <td><?php echo Core\PHPHelper::formatText( $r->trbDireccion );?></td>
                        <td><?php echo $r->trbTelefono;?></td>
                        <td><?php echo Core\PHPHelper::stringToDate( $r->trbFechaIngresos );?></td>
                        <td><?php echo $r->categoria;?></td>
                        <td><?php echo ( $r->trbEstado == 1 ) ? "Activo" : "No activo" ;?></td>
                    </tr>
                <?php endforeach;?>
            <?php endforeach;?> 
        </tbody>
    </table>
    
</div>

<!--<ul class="pager">
    <li><a href="#" class="pagination_element" id="paginate_previous">Anterior</a></li>
    <li><a href="#" class="pagination_element" id="paginate_following">Siguiente</a></li>
</ul>-->

