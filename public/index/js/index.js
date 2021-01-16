window.onload=function(){
                     
        var slideleft = {
                reset:true,
                distance: '50%',
                origin: 'left',
                duration:4000,
                opacity: 0.3
        };
        ScrollReveal().reveal('.slide-left', slideleft);
        var slideright = {
                reset:true,
                distance: '150%',
                origin: 'right',
                duration:4000,
                opacity: 0.3
        };
        ScrollReveal().reveal('.slide-right', slideright);

        var slideup = {
            
                distance: '150%',
                origin: 'bottom',
                duration:2000,
                opacity: 0.5
        };
        ScrollReveal().reveal('.slide-up', slideup);


        

}
$(document).ready(function(){
        var height=$(window).height();
        $(window).scroll(function(){
                if ($(window).scrollTop()>height){
                        $("#top").css('display','block');

                }else{
                $("#top").css('display','none');
                }
        });
        $("#top").click(function(){
                $('body,html').animate({scrollTop:0},1000);
                return false;
        });

        $("#infobar").hide();
        $("#infobtn").click(function(){
                // alert(2)
                $("#infobar").fadeIn(3000);
        })
        
        // $("#filmShow").modal('show');
        $("#close").click(function(){
                // alert(2)
                $("#infobar").fadeOut(1000);
        })
        var height=$(window).height();
      
});


var i = 0;
$(window).scroll(function() {
                
        var height=$(window).height();
        if ($(window).scrollTop()>height && i == 0){
                illustration();
                i=1;
                      
        }else{
                        
        }
});

      
function illustration() {
        $("#movefont").ghostType();
}

