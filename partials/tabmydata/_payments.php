<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$data_contributions = Core\WSClient::getPayments( '800052640' );//NIT traido una vez se loguea en el sistema
?>

<div class="panel panel-success">
    
    <div class="panel-heading">
        <h2 class="panel-title text-center">Relaci&oacute;n de pagos</h2>
    </div>    
    <table class="table">        
        <thead>
            <tr>
                <th>Recibo</th>
                <th>Concepto</th>
                <th>Mes pagado</th>
                <th>Fecha de pago</th>
                <th>Aportes a caja de compensaci&oacute;n</th>               
                <th>Total n&oacute;mina</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach( $data_contributions as $d ):?>
                <?php foreach( $d as $r ):?>                
                    <tr>
                        <td><?php echo $r->item[1];?></td>
                        <td><?php echo ( $r->item[2] == 1 ) ? "Aporte" : "Ajuste";?></td>
                        <td><?php echo $r->item[3];?></td>
                        <td><?php echo Core\PHPHelper::stringToDate( $r->item[4] );?></td>
                        <td><?php echo Core\PHPHelper::numberToMoney( $r->item[5] );?></td>                       
                        <td><?php echo Core\PHPHelper::numberToMoney( $r->item[6] );?></td>
                    </tr>
                <?php endforeach;?>
            <?php endforeach;?> 
        </tbody>
    </table>
    
</div>
