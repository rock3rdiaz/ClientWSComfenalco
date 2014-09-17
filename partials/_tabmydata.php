<br />

<ul class="nav nav-pills" id="_myTab_mydata">
     <li class="active">
         <a href="#_fovis" data-toggle="tab">Fovis</a> 
     </li>
     
     <li>
         <a href="#_payments" data-toggle="tab">Relacion de pagos</a>
     </li>
     <li>
         <a href="#_contributions" data-toggle="tab">Aportes anuales</a>
     </li>
     
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="_fovis">
        <?php Core\PHPHelper::includeFile( 'partials/tabmydata/_fovis.php' ); ?>
    </div>
    
    <div class="tab-pane" id="_payments">
        <?php Core\PHPHelper::includeFile( 'partials/tabmydata/_payments.php' ); ?>
    </div>  
    
     <div class="tab-pane" id="_contributions">
        <?php Core\PHPHelper::includeFile( 'partials/tabmydata/_contributions.php' ); ?>
    </div>  
</div>