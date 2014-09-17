ViewsFactory = {
    
    showMsgResult: function( type, container ){
        
        window.views.showmsgview = new App.Views.ViewMsgResult( {
            
            root: $( 'body' ).find( '#' + container ),
            type: type
        });
    },
 
    fovisDetail: function( btn ){

        //console.log( btn );
        
        window.views.loading = new App.Views.LoadingView({
                                    root: $( 'body' ).find( '#div_fovis_detail' ) 
                                });
        
        $.post( 'core/RequestController.php', 
        
                { year: btn.id, method: 'getDetailStatisticsByFovis' }, 
                
                function( data ){                  
                    
                    window.data = data;
                    
                    //console.log( data );
                            
                    window.views.loading.remove();
                            
                    window.views.fovisdetail = new App.Views.FovisDetailView({
                        
                        json: data 
                    });
                },
                
                'json' 
        );
    }    
}
