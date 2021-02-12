$(function(){
    $('nav.mobile').click(function(){
        var listaMenu = $('nav.mobile ul');
        var icone = $('.botao-menu-mobile').find('i')

        //abrir menu mobile pedo fadeIn
        
        if(listaMenu.is(':hidden') == true){
            icone.removeClass('fa-bars');
            icone.addClass('fa-times');
            listaMenu.slideToggle();
        }
        else{
            icone.removeClass('fa-times');
            icone.addClass('fa-bars');
            listaMenu.slideToggle();
        }
        
       //abre e fecha o menu mobile
       
     
     //<i class="fas fa-times"></i>
    })
})