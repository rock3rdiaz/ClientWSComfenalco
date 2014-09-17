/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$( function(){ 

    console.info( 'App started ...' );
    
    $( 'body' ).find( '.btn_detail' ).on( 'click', function( event ){
       
        ViewsFactory.fovisDetail( event.currentTarget );
    });
    
    $( 'body' ).find( '.pagination_element' ).on( 'click', function( event ){
       
        Paginator.start( event.currentTarget );
    });
    
} );