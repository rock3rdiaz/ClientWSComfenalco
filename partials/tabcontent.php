<div class="tab-content">
    <div class="tab-pane active" id="mydata">
        <?php Core\PHPHelper::includeFile( './partials/_tabmydata.php' ); ?>        
    </div>
    
    <div class="tab-pane" id="employees">
        <?php Core\PHPHelper::includeFile( './partials/_tabemployees.php' ); ?>
    </div>
    
    <div class="tab-pane" id="mynumbers">
        <?php Core\PHPHelper::includeFile( './partials/_mynumbers.php' ); ?>
    </div> 
</div>