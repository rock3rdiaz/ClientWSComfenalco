<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

//Core\PHPHelper::printArray( $data_by_categories );
?>

<br />

<ul class="nav nav-pills" id="_myTab_mynumbers">
     <li class="active">
         <a href="#_bysex" data-toggle="tab">G&eacute;nero sexual</a> 
     </li>
     
     <li>
         <a href="#_bycategories" data-toggle="tab">Categor&iacute;as</a>
     </li>
     
      <li>
         <a href="#_byage" data-toggle="tab">Edad</a>
     </li>
</ul>

<div class="tab-content">
    <div class="tab-pane active" id="_bysex">
        <?php Core\PHPHelper::includeFile( 'partials/tabmynumbers/_bysex.php' ); ?>
    </div>
    
    <div class="tab-pane" id="_bycategories">
        <?php Core\PHPHelper::includeFile( 'partials/tabmynumbers/_bycategories.php' ); ?>
    </div> 
    
    <div class="tab-pane" id="_byage">
        <?php Core\PHPHelper::includeFile( 'partials/tabmynumbers/_byage.php' ); ?>
    </div> 
</div>

