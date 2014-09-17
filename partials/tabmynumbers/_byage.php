<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$data_by_age = Core\WSClient::getStatisticsEmployeeByAge( '800052640' );
?>

<div class="panel panel-success">
    
    <div class="panel-heading">
        <h2 class="panel-title text-center">Empleados por rango de edad</h2>
    </div>    
    <table class="table">        
        <thead>
            <tr>
                <th>Rango de edad</th>
                <th>N&uacute;mero de trabajadores</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach( $data_by_age as $d ):?>
                <?php foreach( $d as $r ):?>
                    <tr>
                        <td><?php echo $r->item[0];?></td>
                        <td><?php echo $r->item[1];?></td>
                        <td><?php echo $r->item[2];?></td>
                        <td><?php echo $r->item[3];?></td>
                        <td><?php echo $r->item[4];?></td>
                    </tr>                    
                <?php endforeach;?>
            <?php endforeach;?> 
        </tbody>
    </table>
    
</div>

