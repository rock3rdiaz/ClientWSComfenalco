/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

App.Views.ViewMsgResult = Backbone.View.extend( {  
    
    events: {
        
    },
   
    initialize: function( config ){
        
        var self = this;
        
        root = config.root;
        
        switch( config.type ){
            
            case 'success':
                self.el.className = 'alert alert-success';
                self.$el.html( '<h3><strong>:)</strong></h3> Operaci&oacute;n realizada con &eacute;xtio' );
                break;
          
            case 'error':
                self.el.className = 'alert alert-danger';
                self.$el.html( '<h3><strong>:\'(</strong></h3> No se pudo completar la operci&oacute;n' );
                break;
                
            case 'info':
                self.el.className = 'alert alert-info';
        }
        
        self.render();
    },
    
    render: function(){
    
        $( 'body' ).find( this.options.root ).html( this.$el );
    }
});


