$(document).ready(function(){

    $(".counter").counterUp({
        delay:10,
        time:1200
    });







    $(".to-top a").click(function(){
        $('html,body').animate({'scrollTop':0},2000);
        return false;

    })

    $(window).scroll(function(){

        if($(window).scrollTop() > 300){
            $(".to-top a").show(); 
        }else{
            $(".to-top a").hide();    
        }
    });




}); 