<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$data_by_sex = Core\WSClient::getStatisticsBySex( '800052640' );//NIT traido una vez se loguea en el sistema
?>
<div class="panel panel-success">
    
    <div class="panel-heading">
        <h2 class="panel-title text-center">Empleados por g&eacute;nero sexual</h2>
    </div>    
    <table class="table">        
        <thead>
            <tr>
                <th>G&eacute;nero</th>
                <th>N&uacute;mero de trabajadores</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach( $data_by_sex as $d ):?>
                <?php foreach( $d as $r ):?>
                    <tr>
                        <td><?php echo $r->item[0];?></td>
                        <td><?php echo $r->item[1];?></td>
                        <td><?php echo $r->item[2];?></td>
                    </tr>                    
                <?php endforeach;?>
            <?php endforeach;?> 
        </tbody>
    </table>
    
</div>

