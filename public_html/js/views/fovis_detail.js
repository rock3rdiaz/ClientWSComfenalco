/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

App.Views.FovisDetailView = Backbone.View.extend({
   
    events: {
        
    },
    
    template: swig.compile( $( 'body' ).find( '#tpl_fovisdetail' ).html() ),
    
    initialize: function( obj ){
        
        console.info( 'New fovis detail view started ..' );
        
        this.render( obj.json );
    },
            
    render: function( obj ){
        
        _data = {
            identification: obj.return.item[0],
            name: obj.return.item[1],
            amount: obj.return.item[2]
        };
        
        //console.log( _data );
        
        $( '#div_fovis_detail' ).html( this.template( { employee: _data } ) );
     }
});
