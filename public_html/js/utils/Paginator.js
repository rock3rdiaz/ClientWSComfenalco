/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

Paginator = {
    
    initiation: 1,
    end: 20,
    page_size: 20,
    
    start: function( element ){
        
        if( element.id == 'paginate_previous' ){
            
            this.previous();
        }
        else{
            
            this.following();
        }
    },
    
    previous: function(){
        
        console.info( 'Previous!' );
    },
            
   following: function(){
       
       console.info( 'Following!' );
       
       window.xhr = $.post(
        
               'core/RequestController.php',
       
               { method: 'paginate', min: 20, max: 40 },
               
               function( data ){
                 
                   console.info( data );
               },
                  
               'json'
        );
   }
}

