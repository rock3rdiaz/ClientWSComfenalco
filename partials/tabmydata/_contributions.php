<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$data_contributions = Core\WSClient::getStatisticsByInputAndSubsidy( '800052640' );//NIT traido una vez se loguea en el sistema
?>

<div class="panel panel-success">
    
    <div class="panel-heading">
        <h2 class="panel-title text-center">Aportes anuales</h2>
    </div>    
    <table class="table">        
        <thead>
            <tr>
                <th>A&ntilde;o</th>
                <th>Aportes a caja de compensaci&oacute;n</th>
                <th>Pago a subsidio</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach( $data_contributions as $d ):?>
                <?php foreach( $d as $r ):?>                
                    <tr>
                        <td><?php echo $r->item[0];?></td>                        
                        <td><?php echo '$' . $r->item[1];?></td>                       
                        <td><?php echo '$' . $r->item[2];?></td>
                    </tr>
                <?php endforeach;?>
            <?php endforeach;?> 
        </tbody>
    </table>
    
</div>
