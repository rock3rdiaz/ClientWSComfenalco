<?php

$data_fovis = Core\WSClient::getStatisticsByFovis( '800052640' );//NIT traido una vez se loguea en el sistema

?>


<div class="panel panel-success">
    
    <div class="panel-heading">
        <h2 class="panel-title text-center">Aportes FOVIS</h2>
    </div>    
    <table class="table">        
        <thead>
            <tr>
                <th>A&ntilde;o</th>
                <th>N&uacute;mero de trabajadores</th>
                <th>Valor SFV</th>
                <th>Detalle</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach( $data_fovis as $d ):?>
                <?php foreach( $d as $r ):?>                
                    <tr>
                        <td><?php echo $r->item[0];?></td>
                        <td><?php echo $r->item[1];?></td>
                        <td><?php echo '$' . $r->item[2] ;?></td>
                        <td>
                            <?php if( next( $d ) ):?>
                                <a id="<?php echo $r->item[0];?>" href="#myModal" class="btn_detail btn btn-success btn-xs" data-toggle="modal">
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                </a>
                            <?php endif ?>
                        </td>
                    </tr>
                <?php endforeach;?>
            <?php endforeach;?> 
        </tbody>
    </table>
    
</div>

<div id="div_fovis_detail"></div>

<script type="text/template" id="tpl_fovisdetail"> 
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table panel">
                <thead>
                    <tr>
                        <th>N&uacute;mero de identificaci&oacute;n</th>
                        <th>Nombre titular del beneficio</th>
                        <th>Monto asignado</th>
                    </tr>
                </thead>
                <tbody>
                    {% for employee in data %}
                        <tr>
                            <td>{{ employee.identification }}</td>
                            <td>{{ employee.name }}</td>
                            <td>{{ employee.amount }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>   
        </div>
    </div>
</script>

<script type="text/javascript" src="public_html/js/views/fovis_detail.js"></script>
<script type="text/javascript" src="public_html/js/views/loading.js"></script>
    