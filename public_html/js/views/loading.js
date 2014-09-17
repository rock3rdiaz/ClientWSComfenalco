/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

App.Views.LoadingView = Backbone.View.extend({
    
    tagName: 'div><figure><img src="public_html/img/ajax-loader.gif"></img></figure',
    id: 'div_loading',
    className: 'pull-right',
    
    events: {
        
    },
    
    initialize: function( config ){
        
        console.info( 'Loading view started ...' );
        
        root = config.root;
        
        this.render();
    },
            
    render: function(){
        
        $( this.options.root ).html( this.el );
    }
});


