<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$data_by_categories = Core\WSClient::getStatisticsCategoriesByCompany( '800052640' );
?>

<div class="panel panel-success">
    
    <div class="panel-heading">
        <h2 class="panel-title text-center">Empleados por categoria</h2>
    </div>    
    <table class="table">        
        <thead>
            <tr>
                <th>Categoria</th>
                <th>N&uacute;mero de empleados</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach( $data_by_categories as $d ):?>
                <?php foreach( $d as $r ):?>
                    <tr>
                        <td><?php echo $r->item[0];?></td>
                        <td><?php echo $r->item[1];?></td>
                        <td><?php echo $r->item[2];?></td>
                        <td><?php echo $r->item[3];?></td>
                    </tr>                    
                <?php endforeach;?>
            <?php endforeach;?> 
        </tbody>
    </table>
    
</div>
